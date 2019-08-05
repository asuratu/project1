<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Encore\Admin\Layout\Content;
use function foo\func;

class CategoriesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '栏目管理';

    public function index(Content $content)
    {
        return $content
            ->header('栏目管理')
            ->body($this->grid());
    }

    public function create(Content $content)
    {
        return $content
            ->header('创建栏目')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category);

        $grid->id('ID');
        $grid->column('栏目名')->display(function () {
            $preStr = '';
            for ($i = 1; $i < $this->level; $i++) {
                $preStr .= '┝  ';
            }
            return $preStr.$this->category_name;
        });
        $grid->landscape('类别图')->image('', 100, 100);
        $grid->language('语言')->using(config('setting.language'));
        $grid->is_display('是否展示')->using(config('setting.is_display'));
        $grid->level('级别');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');

        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->equal('language', '语言')->radio(config('setting.language'));
            $filter->equal('level', '级别')->radio(config('setting.level'));
            $filter->equal('is_display', '是否显示')->radio(config('setting.is_display'));

        });

        $grid->actions(function ($actions) {
            //关闭行操作 查看
            $actions->disableView();
        });

        //查询条件
        $grid->model()->orderBy('language');
        $grid->model()->orderBy('id_tree');
        $grid->model()->orderBy('sort'); //升序

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Category::findOrFail($id));



        return $show;
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Category);

        // 创建一个输入框，第一个参数 title 是模型的字段名，第二个参数是该字段描述
        $form->text('category_name', '栏目名称')->rules('required');

        $form->text('url', '栏目链接')->rules('required');

        $form->textarea('synopsis', '摘要')->rows(3);

        $form->select('parent_id', 'parent_id')->options($this->category())->default(0);

        // 创建一个选择图片的框 使用随机生成文件名 (md5(uniqid()).extension)
        $form->image('landscape', '类别图')->rules('image')->uniqueName();

        // 创建一个富文本编辑器
        $form->ckeditor('substance', '内容')->options(['lang' => 'zh-CN', 'height' => 500]);

        // 创建一组单选框
        $form->radio('target', '打开方式')->options(['1' => 'blank', '0'=> 'self'])->default('0');
        $form->number('sort', '排序')->rules('required')->default(function () {
           return  $this->getSort();
        });
        $form->radio('is_display', '是否显示')->options(['1' => '是', '0'=> '否'])->default('1');
        $form->radio('language', '语言')->options(['0'=> '中文', '1' => '日文'])->default('0');

        $form->text('keywords', '栏目关键词');
        $form->textarea('description', '栏目描述')->rows(3);


        $form->display('created_at', '创建时间');
        $form->display('updated_at', '修改时间');

        $form->saving(function (Form $form) {
            $form->model()->id_tree = '';
        });

        $form->saved(function (Form $form) {
            //更新level，root_id，id_tree
            if ($form->model()->parent_id == 0) {
                $form->model()->level = 1;
                $form->model()->root_id = $form->model()->id;
                $form->model()->id_tree = '.'.sprintf("%03d", $form->model()->id).'.';
            } else {
                //获取父级信息
                $parentInfo = Category::where('id', $form->model()->parent_id)->first();
                $form->model()->level = $parentInfo->level + 1;
                $form->model()->root_id = $parentInfo->root_id;
                $form->model()->id_tree = $parentInfo->id_tree . sprintf("%03d", $form->model()->id) . '.';
            }

            //处理关键词，描述
            $form->model()->keywords = $form->model()->keywords ?? $form->model()->category_name;
            $form->model()->description = $form->model()->description ?? ($form->model()->synopsis ?? $form->model()->category_name);
            $form->model()->save();
        });

        return $form;
    }

    /**
     * @return array
     */
    protected function category()
    {
        $category = new Category();
        $data = $category->where('is_display', 1)->orderBy('id_tree')->get();

        if (count($data) > 0) {
            $data = $data->toArray();
        } else {
            $data = [];
        }

        $result = [0 => "ROOT"];
        foreach ($data as $key => $item) {
            if ($item['level'] > 0) {
                $result[$item['id']] = config('setting.levelStr')[$item['level']] . $item['category_name'];
            }
        }

        return $result;
    }

    /**
     * @return int
     */
    protected function getSort() {
        return Category::where('is_display', 1)->max('sort') + 1;
    }

}

<?php

namespace App\Admin\Controllers;

use App\Models\Download;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DownloadsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Download';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Download);

        $grid->column('id', 'ID');
        $grid->column('title', '标题');
        $grid->language('语言')->using(config('setting.language'));
        $grid->is_display('是否展示')->using(config('setting.is_display'));
        $grid->column('sort', '排序');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');


        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();

            // 在这里添加字段过滤器
            $filter->like('title', '标题');
            $filter->equal('language', '语言')->radio(config('setting.language'));
            $filter->equal('is_display', '是否显示')->radio(config('setting.is_display'));

        });

        //查询条件
        $grid->model()->orderBy('language');
        $grid->model()->orderBy('sort', 'desc'); //升序

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
        $show = new Show(Download::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('language', __('Language'));
        $show->field('is_display', __('Is display'));
        $show->field('attachment', __('Attachment'));
        $show->field('sort', __('Sort'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Download);

        $form->text('title', '标题')->rules('required');
        $form->file('attachment', '附件')->rules('required|file')->uniqueName();

        $form->number('sort', '排序')->rules('required')->default(function () {
            return  $this->getSort();
        });
        $form->radio('is_display', '是否显示')->options(['1' => '是', '0'=> '否'])->default('1');
        $form->radio('language', '语言')->options(['0'=> '中文', '1' => '日文'])->default('0');

        return $form;
    }

    protected function getSort() {
        return Download::where('is_display', 1)->max('sort') + 1;
    }
}

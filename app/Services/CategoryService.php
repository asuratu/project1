<?php
/**
 * Created by PhpStorm.
 * User: Enjoy
 * Date: 2018/12/25
 * Time: 15:31
 */
namespace App\Services;

use App\Models\Category;
use App\Repositories\CategoryRepository;
use ZhuiTech\BootLaravel\Controllers\RestController;
use Illuminate\Http\Request;


class CategoryService extends RestController
{
    public function __construct(CategoryRepository $repository) {
        parent::__construct($repository);
    }

    public function  getCategoryByParent(Request $request)
    {
        $path = $request->path();
        return Category::join('categories as c1',function ($join) use ($path){
            $join->on('categories.id','c1.parent_id')
                ->Where('categories.url' , $path);
        })
            ->select('c1.*')
            ->get();
    }


}

<?php

/*
 * This file is part of the current project.
 *
 * (c) ForeverGlory <http://foreverglory.me/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Http\Controllers;

use App\Models\Download;
use App\Repositories\CategoryRepository;
use App\Models\Category;
use App\Exceptions\InvalidRequestException;
use ZhuiTech\BootLaravel\Controllers\RestController;
use Illuminate\Http\Request;

class CategoriesController extends RestController {

    public function __construct(CategoryRepository $repository) {
        parent::__construct($repository);
    }

    public function getCategoryByParent(Request $request) {
        $path = $request->path();
        $categories = Category::join('categories as c1',function ($join) use ($path){
            $join->on('categories.id','c1.parent_id')
                ->Where('categories.url' , $path)
                ->Where('categories.is_display' , 1);
        })
            ->select('c1.*')
            ->get();

        $category = Category::where('url', $path)->first();
        return view('about.about', [
            'categories' => $categories,
            'category' => $category,
        ]);
    }

    public function getCategoryDetail(Request $request) {
        $path = $request->path();
        $category = Category::where('url', $path)->first();
        if (empty($category)) {
            throw new InvalidRequestException('页面不存在');
        }
        $parent = Category::where('id', $category->parent_id)->first();
        $categories = Category::where('parent_id', $category->parent_id)->where('is_display', 1)->get();


        return view('retail.retail', [
            'category' => $category,
            'categories' => $categories,
            'parent' => $parent,
        ]);
    }

    public function getSaasDetail(Request $request) {
        $path = $request->path();
        $category = Category::where('url', $path)->first();
        if (empty($category)) {
            throw new InvalidRequestException('页面不存在');
        }
        $parent = Category::where('id', $category->parent_id)->first();
        $categories = Category::where('parent_id', $category->parent_id)->where('is_display', 1)->get();


        return view('saas.saas-service', [
            'category' => $category,
            'categories' => $categories,
            'parent' => $parent,
        ]);
    }

    public function getCenterDetail(Request $request) {
        $path = $request->path();
        $categories = Category::join('categories as c1',function ($join) use ($path){
            $join->on('categories.id','c1.parent_id')
                ->Where('categories.url' , $path)
                ->Where('categories.is_display' , 1);
        })
            ->select('c1.*')
            ->get();

        $category = Category::where('url', $path)->first();

        //下载中心
        $downloads = Download::where('is_display', 1)->orderBy('sort', 'desc')->get();

        return view('saas.saas-center', [
            'category' => $category,
            'categories' => $categories,
            'downloads' => $downloads,
        ]);
    }

}

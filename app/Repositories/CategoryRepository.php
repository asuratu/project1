<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Repositories;

use App\Models\Category;
use ZhuiTech\BootLaravel\Repositories\BaseRepository;

/**
 * Description of CategoryRepository
 *
 * @author ForeverGlory
 */
class CategoryRepository extends BaseRepository {

    function model() {
        return Category::class;
    }

}

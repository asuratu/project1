<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category_name')->comment('栏目名');
            $table->string('landscape')->nullable()->comment('类别图');
            $table->tinyInteger('level')->unsigned()->default(0)->comment('栏目名')->index();
            $table->string('id_tree')->comment('id树')->index();
            $table->mediumInteger('parent_id')->unsigned()->default(0)->comment('父级id')->index();
            $table->mediumInteger('root_id')->unsigned()->default(0)->comment('根级id')->index();
            $table->tinyInteger('target')->unsigned()->default(1)->comment('打开方式 0self 1blank');
            $table->mediumInteger('sort')->unsigned()->default(1)->comment('权重');
            $table->tinyInteger('is_display')->unsigned()->default(1)->comment('是否显示 0隐藏 1显示');
            $table->tinyInteger('language')->unsigned()->comment('语言 0zh-CN 1ja');
            $table->text('substance')->nullable()->comment('文本');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

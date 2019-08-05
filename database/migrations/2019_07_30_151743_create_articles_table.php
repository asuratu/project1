<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title')->comment('标题');
            $table->string('author')->nullable()->comment('作者');
            $table->string('synopsis', 500)->nullable()->comment('摘要');
            $table->string('cover')->nullable()->comment('封面');
            $table->tinyInteger('is_home_display')->default(0)->comment('是否在首页显示 0不显示 1显示');
            $table->tinyInteger('is_status')->unsigned()->default(0)->comment('置顶，推荐等状态');
            $table->mediumInteger('view_count')->unsigned()->default(0)->comment('点击次数');
            $table->tinyInteger('language')->default(0)->comment('语言 0zh-CN 1js')->index();
            $table->tinyInteger('is_display')->default(1)->comment('是否显示')->index();

            $table->string('attachment')->nullable()->comment('附件');
            $table->integer('sort')->default(0)->comment('权重')->index();
            $table->text('substance')->nullable()->comment('内容');
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
        Schema::dropIfExists('articles');
    }
}

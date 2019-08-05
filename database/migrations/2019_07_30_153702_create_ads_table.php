<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('type_id')->unsigned()->default(0)->comment('标题')->index();
            $table->string('ad_title')->comment('标题');
            $table->string('ad_img')->nullable()->comment('图片');
            $table->string('ad_url')->nullable()->comment('链接');
            $table->tinyInteger('is_display')->default(1)->comment('是否显示')->index();
            $table->smallInteger('sort')->default(0)->comment('权重')->index();
            $table->tinyInteger('language')->default(0)->comment('语言 0zh-CN 1ja')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}

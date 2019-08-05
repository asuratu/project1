<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->tinyInteger('language')->default(0)->comment('语言 0zh-CN 1js')->index();
            $table->tinyInteger('is_display')->default(1)->comment('是否显示')->index();

            $table->string('attachment')->nullable()->comment('附件');
            $table->integer('sort')->default(0)->comment('权重')->index();
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
        Schema::dropIfExists('downloads');
    }
}

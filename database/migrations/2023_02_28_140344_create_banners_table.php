<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('banner_id');
            $table->integer('category_id')->nullable();
            $table->string('banner_title');
            $table->string('banner_subtitle')->nullable();
            $table->string('banner_url')->unique();
            $table->string('banner_slug')->unique();
            $table->string('banner_image')->nullable();
            $table->string('banner_button')->nullable();
            $table->integer('banner_orderby')->nullable();
            $table->string('banner_publish')->nullable();
            $table->string('banner_status')->default(1)->comment('1 = active, 0 = inactive');
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
        Schema::dropIfExists('banners');
    }
};

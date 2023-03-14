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
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('news_id');
            $table->integer('ncat_id');
            $table->integer('news_author_id');
            $table->string('news_title');
            $table->string('news_url')->unique();
            $table->string('news_slug')->unique();
            $table->text('news_shortDetails')->nullable();
            $table->text('news_details')->nullable();
            $table->string('news_thumbnail')->nullable();
            $table->string('news_image')->nullable();
            $table->string('news_tags')->nullable();
            $table->integer('news_publish')->default(1)->comment('1 = approve, 0 = pending');
            $table->integer('news_feature')->default(1)->comment('1 = active, 0 = inactive');
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
        Schema::dropIfExists('news');
    }
};

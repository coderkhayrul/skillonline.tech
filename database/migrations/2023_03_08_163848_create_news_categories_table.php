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
        Schema::create('news_categories', function (Blueprint $table) {
            $table->bigIncrements('ncat_id');
            $table->string('ncat_name');
            $table->string('ncat_url')->unique();
            $table->string('ncat_slug')->unique();
            $table->text('ncat_details')->nullable();
            $table->integer('ncat_order')->nullable();
            $table->string('ncat_thumbnail')->nullable();
            $table->integer('ncat_status')->default(1)->comment('1 = active, 0 = inactive');
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
        Schema::dropIfExists('news_categories');
    }
};

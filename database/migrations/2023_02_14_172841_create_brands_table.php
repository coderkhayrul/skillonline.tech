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
        Schema::create('brands', function (Blueprint $table) {
            $table->bigIncrements('brand_id');
            $table->string('brand_name');
            $table->string('brand_url')->unique();
            $table->string('brand_slug')->unique();
            $table->string('brand_image')->nullable();
            $table->string('brand_remarks')->nullable();
            $table->integer('brand_orderby')->nullable();
            $table->integer('brand_feature')->nullable();
            $table->integer('brand_active')->default(1)->comment('1 = active, 0 = inactive');
            $table->integer('brand_status')->default(1)->comment('1 = active, 0 = inactive');
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
        Schema::dropIfExists('brands');
    }
};

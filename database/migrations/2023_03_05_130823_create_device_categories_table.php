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
        Schema::create('device_categories', function (Blueprint $table) {
            $table->id();
            $table->string('d_category_name');
            $table->text('d_category_details')->nullable();
            $table->string('d_category_url');
            $table->integer('d_category_order')->nullable();
            $table->string('d_category_thumbnail');
            $table->string('d_category_slug');
            $table->integer('d_category_status')->default(1);
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
        Schema::dropIfExists('device_categories');
    }
};

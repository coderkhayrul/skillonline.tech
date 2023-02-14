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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->bigIncrements('bc_id');
            $table->string('bc_name');
            $table->string('bc_url')->unique();
            $table->string('bc_slug')->unique();
            $table->integer('bc_creator')->nullable();
            $table->integer('bc_editor')->nullable();
            $table->string('bc_image')->nullable();
            $table->integer('bc_orderby')->nullable();
            $table->string('bc_remarks')->nullable();
            $table->integer('bc_active')->default(1)->comment('1 = active, 0 = inactive');
            $table->integer('bc_status')->default(1)->comment('1 = active, 0 = inactive');
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
        Schema::dropIfExists('blog_categories');
    }
};

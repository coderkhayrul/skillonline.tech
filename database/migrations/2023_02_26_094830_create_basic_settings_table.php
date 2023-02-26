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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->bigIncrements('bs_id');
            $table->string('bs_company')->nullable();
            $table->string('bs_url')->nullable();
            $table->string('bs_title')->nullable();
            $table->string('bs_logo')->nullable();
            $table->string('bs_f_logo')->nullable();
            $table->string('bs_fabicon')->nullable();
            $table->string('bs_favicon')->nullable();
            $table->string('bs_status')->default(1);
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
        Schema::dropIfExists('basic_settings');
    }
};

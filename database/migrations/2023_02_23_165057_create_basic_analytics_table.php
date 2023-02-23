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
        Schema::create('basic_analytics', function (Blueprint $table) {
            $table->bigIncrements('analytic_id');
            $table->string('google_analytic')->nullable();
            $table->string('facebook_pixel')->nullable();
            $table->string('bing_analytic')->nullable();
            $table->string('google_site_verification')->nullable();
            $table->string('facebook_site_verification')->nullable();
            $table->string('bing_site_verification')->nullable();
            $table->string('domain_verification')->nullable();
            $table->string('custom_header_script')->nullable();
            $table->string('custom_footer_script')->nullable();
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
        Schema::dropIfExists('basic_analytics');
    }
};

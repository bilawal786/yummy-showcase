<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('sitename');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('time')->nullable();
            $table->longText('footer_text')->nullable();
            $table->string('footer_logo')->nullable();
            $table->longText('terms')->nullable();
            $table->longText('privacy')->nullable();

            $table->longText('about')->nullable();
            $table->longText('aboutimage')->nullable();

            $table->longText('d1')->nullable();
            $table->longText('d2')->nullable();
            $table->longText('d3')->nullable();

            $table->longText('d4')->nullable();
            $table->longText('d5')->nullable();
            $table->longText('d6')->nullable();
            $table->longText('d7')->nullable();
            $table->longText('d8')->nullable();
            $table->longText('d9')->nullable();
            $table->longText('d10')->nullable();
            $table->longText('d11')->nullable();

            $table->string('video')->nullable();
            $table->string('vimage')->nullable();
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
        Schema::dropIfExists('general_settings');
    }
}

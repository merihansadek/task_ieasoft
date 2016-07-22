<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('changes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slider_image_1');
            $table->string('slider_image_2');
            $table->string('slider_image_3');
            $table->string('footer_1');
            $table->string('footer_2');
            $table->string('footer_3');
            $table->string('footer_4');
            $table->string('footer_5');
            $table->string('footer_6');
            $table->string('footer_7');
            $table->string('footer_8');
            $table->string('contact-mail');
            $table->string('contact-phone');
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
        Schema::drop('changes');
    }
}

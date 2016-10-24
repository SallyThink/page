<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mains_id');
            $table->string('content_name');
            $table->string('content');
            $table->string('width');
            $table->string('positionX');
            $table->string('positionY');
            $table->string('form_id')->nullable();
            $table->string('color')->nullable();
            $table->string('background_color')->nullable();
            $table->string('border')->nullable();
            $table->string('border_radius')->nullable();
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
        Schema::dropIfExists('contents');
    }
}

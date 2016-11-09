<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLazyLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lazyloads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lazyload_id');
            $table->integer('timeout')->nullable();
            $table->string('background_color')->nullable();
            $table->string('background_image')->nullable();
            $table->enum('published',[0,1])->default(1);
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
        Schema::dropIfExists('lazyloads');
    }
}

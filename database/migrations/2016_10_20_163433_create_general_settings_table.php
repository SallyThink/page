<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('headTitle');
            $table->enum('plugin',['pagepilling','scroolmagic']);
            $table->enum('published',[0,1])->default(1);
            $table->string('direction');
            $table->enum('navigation',[0,1])->default(1);
            $table->enum('navigationPosition',['left','right'])->default('right');
            $table->string('menu_buttons_position')->nullable();
            $table->string('color')->nullable();
            $table->string('hover_color')->nullable();
            $table->string('border')->nullable();
            $table->string('border_radius')->nullable();
            $table->string('background_color')->nullable();
            $table->string('hover_background_color')->nullable();
            $table->string('active_background_color')->nullable();
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

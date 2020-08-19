<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConcernsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
            $table->text('text1')->nullable();
            $table->text('text2')->nullable();
            $table->string('img')->nullable();
            $table->string('img_title')->nullable();
            $table->string('bk_img')->nullable();
            $table->text('text3')->nullable();
            $table->string('information_for')->nullable();
            $table->tinyInteger('delete_status')->default(1);
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
        Schema::dropIfExists('concerns');
    }
}

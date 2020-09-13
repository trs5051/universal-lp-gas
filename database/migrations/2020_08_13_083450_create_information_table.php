<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
            $table->text('text1')->nullable();
            $table->string('img')->nullable();
            $table->string('img_title')->nullable();
            $table->string('number')->nullable();
            $table->text('text2')->nullable();
            $table->text('text3')->nullable();
            $table->string('information_for')->nullable();
            $table->string('delete_status')->default(1);


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
        Schema::dropIfExists('information');
    }
}

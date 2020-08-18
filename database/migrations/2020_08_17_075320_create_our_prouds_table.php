<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurProudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_prouds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('heading')->nullable();
            $table->string('description')->nullable();
            $table->string('number1')->nullable();
            $table->string('img1')->nullable();
            $table->string('text1')->nullable();
            $table->string('number2')->nullable();
            $table->string('img2')->nullable();
            $table->string('text2')->nullable();
            $table->string('number3')->nullable();
            $table->string('img3')->nullable();
            $table->string('text3')->nullable();
            $table->string('number4')->nullable();
            $table->string('img4')->nullable();
            $table->string('text4')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('our_prouds');
    }
}

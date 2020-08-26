<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCylinderSafetiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cylinder_safeties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('top_heading')->nullable();
            $table->text('top_text')->nullable();
            $table->string('top_img')->nullable();
            $table->string('safety_tips_img1')->nullable();
            $table->string('safety_tips_img2')->nullable();
            $table->string('safety_tips_heading')->nullable();
            $table->text('safety_tips_text')->nullable();
            $table->string('stove_img1')->nullable();
            $table->string('stove_img2')->nullable();
            $table->string('stove_text1')->nullable();
            $table->string('stove_text2')->nullable();
            $table->string('leakage_img1')->nullable();
            $table->string('leakage_img2')->nullable();
            $table->string('leakage_img3')->nullable();
            $table->string('leakage_img4')->nullable();
            $table->string('leakage_text1')->nullable();
            $table->string('leakage_text2')->nullable();
            $table->string('leakage_text3')->nullable();
            $table->string('leakage_text4')->nullable();
            $table->string('safely_img1')->nullable();
            $table->string('safely_img2')->nullable();
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
        Schema::dropIfExists('cylinder_safeties');
    }
}

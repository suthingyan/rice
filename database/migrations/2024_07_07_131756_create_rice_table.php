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
        Schema::create('rice', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('rice_categories')->onDelete('cascade');
            $table->unsignedBigInteger('subCategory_id');
            $table->foreign('subCategory_id')->references('id')->on('rice_sub_categories')->onDelete('cascade');
            $table->unsignedBigInteger('silk_id');
            $table->foreign('silk_id')->references('id')->on('silk')->onDelete('cascade');  
            $table->integer('soilCount');
            $table->integer('acre');
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
        Schema::dropIfExists('rice');
    }
};

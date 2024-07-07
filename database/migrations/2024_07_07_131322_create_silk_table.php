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
        Schema::create('silk', function (Blueprint $table) {
            $table->id();
            $table->string('silkName');
            $table->text('description');
            $table->unsignedBigInteger('pesticides_id')->nullable();
            $table->foreign('pesticides_id')->references('id')->on('pesticides')->onDelete('cascade');
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
        Schema::dropIfExists('silk');
    }
};

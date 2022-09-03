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
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('schools',20);
            $table->decimal('hospitals',20);
            $table->decimal('colleges',20);
            $table->decimal('bars',20);
            $table->unsignedBigInteger('city_id')->default(1);
            $table->foreign('city_id', 'towns_city_id_foreign')->references('id')->on('cities')->cascadeOnDelete();
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
        Schema::dropIfExists('towns');
    }
};

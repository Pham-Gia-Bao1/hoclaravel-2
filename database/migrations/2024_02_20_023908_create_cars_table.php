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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('model');
            $table->date('created');
            $table->timestamps();
        });

        // Add 'image' column and rename 'make' column to 'description'
        Schema::table('cars', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->renameColumn('make', 'description');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // In the 'down' method, reverse the changes made in 'up'

        Schema::dropIfExists('cars');
    }
};

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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // 'name','place_of_work','tell','tribe','fee','dob','county','gender','next_of_keen','id_no',

            $table->string('place_of_work');
            $table->string('tell')->nullable();
            $table->string('tribe',);
            $table->string('fee');
            $table->string('county');
            $table->string('gender');
            $table->integer('next_of_keen')->nullable();
            $table->string('id_no')->nullable();
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
        Schema::dropIfExists('workers');
    }
};

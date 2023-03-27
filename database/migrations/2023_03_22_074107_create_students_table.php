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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('course')->nullable();
            $table->string('level')->nullable();
            $table->date('dob');
            // $table->integer('dob');
            // 'name','course','level','dob','fee','paid','tribe','county','gender','next_of_keen','tell','id_no'
            $table->decimal('fee',6,2);
            $table->decimal('paid',6,2);
            $table->string('tribe');
            $table->string('county');
            $table->string('gender');
            $table->string('next_of_keen');
            $table->string('tell')->nullable();
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
        Schema::dropIfExists('students');
    }
};

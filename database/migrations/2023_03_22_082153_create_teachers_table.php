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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            //'name','dob','tribe','salary','phone','id_no','county','doe','next_of_keen','academic_level','marital_status','spouse_name'
            $table->date('dob');
            $table->string('tribe');
            $table->decimal('salary',6,2);
            $table->string('phone')->nullable();
            $table->string('id_no')->nullable();
            $table->string('county');
            $table->integer('doe');
            $table->string('next_of_keen')->nullable();
            $table->string('academic_level');
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();

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
        Schema::dropIfExists('teachers');
    }
};

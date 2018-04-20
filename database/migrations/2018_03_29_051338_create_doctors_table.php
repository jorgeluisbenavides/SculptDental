<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name_one');
            $table->string('last_name_two');
            $table->mediumtext('full_name');
            $table->mediumtext('speciality');
            $table->mediumtext('professional_license');
            $table->mediumtext('graduate_university');//procedencia
            $table->enum('sex',['MALE','FEMALE'])->default('MALE');
            $table->string('cell_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->mediumtext('img_name')->nullable();
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
            $table->enum('type',['Doctor','Asistente'])->default('Doctor');
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
        Schema::dropIfExists('doctors');
    }
}

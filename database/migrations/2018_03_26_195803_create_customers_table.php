<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('folio')->nullable();
            $table->string('name');
            $table->string('last_name_one');
            $table->string('last_name_two');
            $table->mediumtext('full_name');
            $table->text('address')->nullable();
            $table->text('references')->nullable();
            $table->integer('age')->nullable()->unsigned();
            $table->string('cell_phone')->nullable();
            $table->string('home_phone')->nullable();
            $table->enum('sex',['Masculino','Femenino'])->default('Masculino');
            $table->enum('civil_state',['Soltero','Casado','Viudo'])->default('Soltero'); 
            $table->mediumtext('img_name')->nullable();
            $table->enum('status',['Activo','Inactivo'])->default('Activo');
            $table->integer('occupation_id')->unsigned();
            //Relaciones
            $table->foreign('occupation_id')->references('id')->on('occupations')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            //campo de fechas 
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
        Schema::dropIfExists('customers');
    }
}

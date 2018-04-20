<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreatmentsCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treatments_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('treatments_id')->unsigned();
            $table->integer('customers_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('treatments_id')->references('id')->on('treatments')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('customers_id')->references('id')->on('customers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('treatments_customers');
    }
}

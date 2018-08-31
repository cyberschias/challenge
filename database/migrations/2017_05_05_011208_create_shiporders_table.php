<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criar Tabela ShipOrders
        Schema::create('shiporders', function (Blueprint $table){
            $table->increments('id');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')
                ->references('id')->on('person')
                ->onDelete('cascade');
            $table->string('shipto_name');
            $table->string('shipto_address');
            $table->string('shipto_city');
            $table->string('shipto_country');
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
        //Deletar Tabela ShipOrders
        Schema::drop('shiporders');
    }
}

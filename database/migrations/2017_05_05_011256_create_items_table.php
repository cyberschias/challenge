<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criar Tabela Items
        Schema::create('items', function (Blueprint $table){
            $table->increments('id');
            $table->integer('ship_order_id')->unsigned();
            $table->foreign('ship_order_id')
                ->references('id')->on('shiporder')
                ->onDelete('cascade');
            $table->string('title');
            $table->string('note');
            $table->integer('quantity');
            $table->double('price', 6, 2);
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
        //Deletar Tabela Items
        Schema::drop('items');
    }
}

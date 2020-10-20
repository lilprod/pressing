<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('delivery_code');
            $table->string('deposit_id');
            $table->string('deposit_code');
            $table->integer('quantity');
            $table->float('deposit_amount');
            $table->float('amount_paid')->nullable();
            $table->float('discount')->nullable();
            $table->float('left_pay');
            $table->date('deposit_date');
            $table->date('date_retrait');
            $table->integer('status');
            $table->integer('client_id');
            $table->string('client_name');
            $table->string('client_email');
            $table->string('client_address');
            $table->string('client_phone');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepositedArticlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('deposited_articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('article_id');
            $table->string('designation')->nullable();
            $table->integer('quantity');
            $table->float('amount');
            $table->integer('deposit_id');
            $table->integer('client_id');
            $table->string('client_name');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('deposited_articles');
    }
}

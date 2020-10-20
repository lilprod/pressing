<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStatusToDepositedArticles extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('deposited_articles', function (Blueprint $table) {
            $table->integer('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('deposited_articles', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}

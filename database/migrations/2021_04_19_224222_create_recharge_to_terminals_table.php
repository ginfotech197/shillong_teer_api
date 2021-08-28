<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargeToTerminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recharge_to_terminals', function (Blueprint $table) {
            $table->id();

            $table->double('amount')->default(0);

            $table->bigInteger('recharge_master_id')->unsigned();
            $table ->foreign('recharge_master_id')->references('id')->on('users');


            $table->bigInteger('terminal_id')->unsigned();
            $table ->foreign('terminal_id')->references('id')->on('users');

            $table->bigInteger('recharge_master_cat_id')->unsigned();
            $table ->foreign('recharge_master_cat_id')->references('id')->on('user_types');

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
        Schema::dropIfExists('recharge_to_terminals');
    }
}

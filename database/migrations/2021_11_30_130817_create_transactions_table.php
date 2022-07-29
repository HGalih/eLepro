<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_paidoff')->default('0');
            $table->date('duedate')->nullable();
            $table->date('paiddate')->nullable();
            $table->unsignedBigInteger('purpose_id');
            $table->text('note')->nullable();
            $table->bigInteger('amount');
            $table->unsignedBigInteger('receiver_account_id')->nullable();
            $table->unsignedBigInteger('payment_from')->nullable();
            $table->unsignedBigInteger('payment_for')->nullable();
            $table->string('receipt')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->boolean('is_replacement')->default('1');
            $table->string('note')->nullable();
            $table->unsignedBigInteger('transaction_id');
            $table->timestamps();
        });

        // Schema::table('attendance_teachers', function (Blueprint $table) {
        //     $table->foreign('transaction_id')
        //     ->references('id') -> on('transactions');
        //     $table->foreign('employee_id')
        //     ->references('id') -> on('employees');
        // });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_teachers');
    }
}

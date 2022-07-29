<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherAvailabilitySchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_availability_schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->timestamps();
        });

        Schema::table('teacher_availability_schedules', function (Blueprint $table) {
            $table->foreign('employee_id')
            ->references('id') -> on('employees');
            $table->foreign('schedule_id')
            ->references('id') -> on('schedules');
            $table->foreign('class_id')
            ->references('id') -> on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teacher_availability_schedules');
    }
}
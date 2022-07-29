<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelationAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table)
        {
            $table->foreign('course_id')
            ->references('id') -> on('courses');
        });


        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('category_id')
            ->references('id') -> on('course_categories');
            $table->foreign('level_id')
            ->references('id') -> on('course_levels');
            $table->foreign('course_prerequisite_id')
            ->references('id') -> on('courses');
        });


        Schema::table('schools', function (Blueprint $table) {
            $table->foreign('school_status_id')
            ->references('id') -> on('school_statuses');
        });


        Schema::table('employees', function (Blueprint $table) {
            $table->foreign('position_id')
            ->references('id') -> on('employee_positions');
            });


        Schema::table('prices', function (Blueprint $table) {
            $table->foreign('course_id')
            ->references('id') -> on('courses');
        });

        Schema::table('classes', function (Blueprint $table) {
            $table->foreign('course_id')
            ->references('id') -> on('courses');
            $table->foreign('location_id')
            ->references('id') -> on('locations');
            $table->foreign('supervisor_id')
            ->references('id') -> on('employees');
            $table->foreign('classtype_id')
            ->references('id') -> on('classtypes');
        });


        Schema::table('students', function (Blueprint $table) {
            $table->foreign('school_id')
            ->references('id') -> on('schools');
            $table->foreign('status_id')
            ->references('id') -> on('student_statuses');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

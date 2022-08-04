<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('student_id');
            $table->bigInteger('normal_price')->nullable();
            $table->bigInteger('final_price')->nullable();
            $table->boolean('is_paidoff')->default('0');
            $table->timestamps();
        });

        Schema::table('class_members', function (Blueprint $table) {
            $table->foreign('student_id')
            ->references('id') -> on('users');
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
        Schema::dropIfExists('class_members');
    }
}

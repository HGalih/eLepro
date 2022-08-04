<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->nullable();
            $table->string('phone');
            $table->string('sosmed01')->nullable();
            $table->string('sosmed02')->nullable();
            $table->string('sosmed03')->nullable();
            $table->enum('gender',['male','female']);
            $table->date('birthdate')->nullable();
            $table->string('nationality')->nullable();
            $table->text('address')->nullable();
            $table->string('city');
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('postcode')->nullable();
            $table->string('photo')->nullable();
            $table->text('note01')->nullable();
            $table->text('note02')->nullable();
            $table->text('note03')->nullable();
            $table->unsignedBigInteger('school_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->integer('point')->default(0);
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
        Schema::dropIfExists('student_details');
    }
}

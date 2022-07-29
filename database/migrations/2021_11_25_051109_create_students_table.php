<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickname')->nullable();
            $table->string('phone');
            $table->string('sosmed01')->nullable();
            $table->string('sosmed02')->nullable();
            $table->string('sosmed03')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
            $table->unsignedBigInteger('status_id');
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
        Schema::dropIfExists('students');
    }
}

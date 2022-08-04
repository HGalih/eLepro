<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('gender',['male','female']);
            $table->date('birthdate')->nullable();
            $table->string('NIK');
            $table->string('phone');
            $table->string('sosmed01')->nullable();
            $table->string('sosmed02')->nullable();
            $table->string('sosmed03')->nullable();
            $table->text('address')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->string('bankaccount')->nullable();
            $table->string('education');
            $table->string('occupation')->nullable();
            $table->string('photo')->nullable();
            $table->text('note01')->nullable();
            $table->text('note02')->nullable();
            $table->text('note03')->nullable();
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
        Schema::dropIfExists('employee_details');
    }
}

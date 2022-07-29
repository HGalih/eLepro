<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('class_status_id');
            $table->unsignedBigInteger('occurence_id');
            $table->date('date')->nullable();
            $table->string('starttime')->nullable();
            $table->string('endtime')->nullable();
            $table->text('note')->nullable();
            $table->text('homework')->nullable();
            $table->string('photo')->nullable();
            $table->string('recording_link')->nullable();
            $table->boolean('is_approved')->default('0');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->timestamps();
        });
  
        Schema::table('class_meetings', function (Blueprint $table) {
            $table->foreign('class_id')
            ->references('id') -> on('classes');
            $table->foreign('class_status_id')
            ->references('id') -> on('class_statuses');
            $table->foreign('occurence_id')
            ->references('id') -> on('class_occurences');
            $table->foreign('approved_by')
            ->references('id') -> on('employees');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_meetings');
    }
}
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('reminders', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('appointment_id');
        $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');
        $table->string('title');
        $table->string('user_name');
        $table->dateTime('time');
        $table->boolean('sent')->default(false);
        $table->string('email');
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
        Schema::dropIfExists('reminder');
    }
}

?>
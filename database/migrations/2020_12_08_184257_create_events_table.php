<?php
# @Author: tomfarrelly
# @Date:   2020-12-08T18:42:57+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-06T14:34:21+01:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
          $table->id();
          $table->string('name');
          $table->text('description');
          $table->date('date');
          $table->time('time');
          $table->bigInteger('user_id')->unsigned();
          $table->rememberToken();
          $table->timestamps();


         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

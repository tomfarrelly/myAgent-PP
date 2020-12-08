<?php
# @Author: tomfarrelly
# @Date:   2020-12-08T18:42:57+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-08T18:43:19+00:00




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
          $table->string('name');
          $table->string('description');
          $table->string('venue');
          $table->date('date');
          $table->time('time');
          $table->bigInteger('user_id')->unsigned();
          $table->string('type');
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
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

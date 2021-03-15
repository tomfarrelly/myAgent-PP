<?php
# @Author: tomfarrelly
# @Date:   2021-02-13T15:50:40+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-01T18:57:59+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id')->unsigned()->nullable();
            $table->unsignedBigInteger('genre_id')->unsigned();
            $table->timestamps();



            $table->foreign('event_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('genre_id')->references('id')->on('genres')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_genres');
    }
}

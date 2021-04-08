<?php
# @Author: tomfarrelly
# @Date:   2021-02-13T15:50:40+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-04-08T17:22:24+01:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDjGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dj_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dj_id')->unsigned()->nullable();
            $table->unsignedBigInteger('genre_id')->unsigned();
            $table->timestamps();

            $table->foreign('dj_id')->references('id')->on('djs')->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('dj_genres');
    }
}

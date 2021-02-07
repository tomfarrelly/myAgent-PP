<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T16:26:20+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-07T16:42:44+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenreIdToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id')->nullable();

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
        Schema::table('events', function (Blueprint $table) {
              $table->dropColumn('genre_id');
        });
    }
}

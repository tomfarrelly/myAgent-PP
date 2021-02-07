<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T16:32:29+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-02-07T16:42:42+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGenreIdToDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('djs', function (Blueprint $table) {
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
        Schema::table('djs', function (Blueprint $table) {
              $table->dropColumn('genre_id');
        });
    }
}

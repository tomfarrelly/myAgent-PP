<?php
# @Author: tomfarrelly
# @Date:   2021-02-07T17:36:58+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-15T17:39:45+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVenueIdToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
          $table->unsignedBigInteger('venue_id')->nullable();

          $table->foreign('venue_id')->references('id')->on('venues')->onUpdate('cascade')->onDelete('restrict');
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
            $table->dropColumn('venue_id');
        });
    }
}

<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T19:23:46+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2020-12-16T19:23:56+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoverToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('cover')->nullable()->default('default-cover.png');
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
            $table->dropColumn('cover');
        });
    }
}

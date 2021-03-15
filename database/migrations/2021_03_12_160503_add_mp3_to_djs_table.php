<?php
# @Author: tomfarrelly
# @Date:   2021-03-12T16:05:03+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-12T16:13:09+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMp3ToDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('djs', function (Blueprint $table) {

            $table->string('mp3')->nullable();

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
            $table->dropColumn('mp3');
        });
    }
}

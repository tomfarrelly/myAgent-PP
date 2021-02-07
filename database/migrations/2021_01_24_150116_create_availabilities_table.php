<?php
# @Author: tomfarrelly
# @Date:   2021-01-24T15:01:16+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-01-26T14:28:46+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('availabilities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('dj_id')->unsigned();
            $table->DateTime('date_start')->nullable();
            $table->DateTime('date_end')->nullable();
            $table->timestamps();

            $table->foreign('dj_id')->references('id')->on('djs')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('availabilities');
    }
}

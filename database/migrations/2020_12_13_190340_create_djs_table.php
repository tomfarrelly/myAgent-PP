<?php
# @Author: tomfarrelly
# @Date:   2020-12-16T22:47:21+00:00
# @Last modified by:   tomfarrelly
# @Last modified time: 2021-03-14T23:05:06+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djs', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',6,2);
            
            $table->unsignedBigInteger('user_id');
            $table->string('track1')->nullable();
            $table->string('track2')->nullable();
            $table->string('track3')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('djs');
    }
}

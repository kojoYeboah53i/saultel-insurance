<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('healths', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('region');
            $table->string('district');
            $table->string('facility_name');
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('facility_type')->nullable();
            $table->string('town')->nullable();
            $table->string('ownership')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('healths');
    }
}

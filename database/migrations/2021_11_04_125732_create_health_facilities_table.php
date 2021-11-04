<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHealthFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('region');
            $table->string('district');
            $table->string('facility_name');
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('facility_type');
            $table->string('town');
            $table->string('ownership');
            $table->string('long');
            $table->string('lat');
            //foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('user_id')->('id')->on('users');

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
        Schema::dropIfExists('health_facilities');
    }
}

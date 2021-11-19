<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->id();
            $table->string('policy_number');
            $table->integer('service_provider_id');
            $table->integer('subscriber_id');
            $table->string('institution');
            $table->string('department');
            $table->string('doctor')->nullable();
            $table->string('treatment_type')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('treatment_description')->nullable();
            $table->string('uploaded_files_url')->nullable();
            $table->boolean('ct_scan')->default(false);
            $table->boolean('x-ray')->default(false);
            $table->boolean('miri')->default(false);
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('claims');
    }
}

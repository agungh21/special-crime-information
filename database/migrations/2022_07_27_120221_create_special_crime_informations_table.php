<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialCrimeInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('special_crime_informations', function (Blueprint $table) {
            $table->id();
            $table->string('spdp_number')->nullable();
            $table->string('suspect_name')->nullable();
            $table->longText('position_case')->nullable();
            $table->string('status_matter')->nullable();
            $table->date('spdp_date')->nullable();
            $table->string('register_number')->nullable();
            $table->string('jpu_name')->nullable();
            $table->string('place_birth')->nullable();
            $table->string('date_birth')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->longText('address')->nullable();
            $table->longText('pasal_hit')->nullable();
            $table->string('type_crime')->nullable();
            $table->longText('jpu_claim')->nullable();
            $table->longText('verdict')->nullable();
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
        Schema::dropIfExists('special_crime_informations');
    }
}

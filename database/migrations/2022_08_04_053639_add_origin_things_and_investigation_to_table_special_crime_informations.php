<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOriginThingsAndInvestigationToTableSpecialCrimeInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('special_crime_informations', function (Blueprint $table) {
            $table->string('origin_things')->nullable()->after('id');
            $table->string('investigation_number')->nullable()->after('origin_things');
            $table->date('investigation_date')->nullable()->after('investigation_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('special_crime_informations', function (Blueprint $table) {
            //
        });
    }
}

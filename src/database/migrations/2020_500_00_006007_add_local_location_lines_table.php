<?php
/**
 * Author: Amir Hossein Jahani | iAmir.net
 * Last modified: 1/18/21, 1:20 PM
 * Copyright (c) 2021. Powered by iamir.net
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLocalLocationLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('location_lines', function (Blueprint $table) {
            $table->string('local')->nullable()->after('latitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('location_lines', function ($table) {
            $table->dropColumn('local');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeToTourPanoramas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tour_panoramas', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
            $table->string('preview')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tour_panoramas', function (Blueprint $table) {
            $table->string('image')->change();
            $table->string('preview')->change();
        });
    }
}

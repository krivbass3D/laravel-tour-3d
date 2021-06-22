<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourPanoramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_panoramas', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('branch_id')->unsigned();
            $table->string('slug')->unique();
            $table->string('title');
            $table->integer('sorting')->unsigned();
            $table->text('excerpt')->nullable();
            $table->text('description')->nullable();
            $table->string('image');
            $table->string('preview');

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('branch_id')->references('id')->on('tour_branches');
            $table->index('sorting');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tour_panoramas');
    }
}

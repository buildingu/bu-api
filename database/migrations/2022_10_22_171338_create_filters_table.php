<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filters', function (Blueprint $table) {
            $table->id();
            $table->integer('cost');
            $table->integer('duration_in_months');
            $table->foreignID('location_id')->constrained('locations');
            $table->foreignID('type_id')->constrained('types');
            $table->foreignID('requirement_id')->constrained('requirements');
            $table->integer('season_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filters');
    }
};

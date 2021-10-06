<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentOpportunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('host');
            $table->string('duration');
            $table->text('requirements');
            $table->text('description');
            $table->string('cost');
            $table->foreignId('timeframe_id')->constrained('student_opportunity_timeframes');
            $table->foreignId('location_id')->constrained('student_opportunity_locations');
            $table->foreignId('type_id')->constrained('student_opportunity_types');
            $table->foreignId('season_id')->constrained('student_opportunity_seasons');
            $table->boolean('is_remote');
            $table->boolean('is_university');
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
        Schema::dropIfExists('student_opportunities');
    }
}

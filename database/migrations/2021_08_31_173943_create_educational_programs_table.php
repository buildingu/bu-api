<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('host');
            $table->text('requirements');
            $table->text('description');
            $table->foreignId('duration_id')->constrained('educational_program_durations');
            $table->foreignId('location_id')->constrained('educational_program_locations');
            $table->foreignId('resource_id')->constrained('resources');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educational_programs');
    }
}

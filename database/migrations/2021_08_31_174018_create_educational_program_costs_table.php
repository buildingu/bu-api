<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationalProgramCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educational_program_costs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('educational_programs');
            $table->integer('cost');
            $table->string('type')->nullable;
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
        Schema::dropIfExists('educational_program_costs');
    }
}

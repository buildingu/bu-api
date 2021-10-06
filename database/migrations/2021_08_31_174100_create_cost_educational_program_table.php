<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostEducationalProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_educational_program', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained('educational_programs');
            $table->foreignId('cost_id')->constrained('educational_program_costs');
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
        Schema::dropIfExists('cost_educational_program');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundingOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funding_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sponsor');
            $table->string('type');
            $table->text('eligibility');
            $table->dateTime('deadline');
            $table->text('description');
            $table->foreignId('school_id')->constrained('funding_option_schools');
            $table->foreignId('financial_id')->constrained('funding_option_financial_needs');
            $table->foreignId('demographic_id')->constrained('funding_option_demographics');
            $table->boolean('is_remote')->default(0);
            $table->boolean('is_university')->default(0);
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
        Schema::dropIfExists('funding_options');
    }
}

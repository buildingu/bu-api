<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::table('users', function (Blueprint $table){
            $table->foreignId('education_id')->constrained('education_levels');
            $table->foreignId('gender_id')->constrained('genders');
            $table->foreignId('city_id')->constrained('cities');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*
        Schema::table('users', function (Blueprint $table){
            $table->dropConstrainedForeignId('education_id');
            $table->dropConstrainedForeignId('gender_id');
            $table->dropConstrainedForeignId('city_id');
        });
        */
    }
}

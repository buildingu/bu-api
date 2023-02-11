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
        Schema::create('resources', function (Blueprint $table) {
            $table->id()->autoIncrement()->primary();
            $table->string("title")->nullable();
            $table->text("content");
            $table->boolean("status")->default(false);
            $table->integer("views_last_month")->default(0);
            $table->integer("institution_id");
            $table->integer("resourceable_id");
            $table->integer("resource_type_id");
            $table->foreign("institution_id")->constrained();
            $table->foreign("resource_type_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resources');
    }
};

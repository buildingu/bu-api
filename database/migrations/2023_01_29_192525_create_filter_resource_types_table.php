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
        Schema::create('filter_resource_types', function (Blueprint $table) {
            $table->integer("filter_id");
            $table->integer("resource_type_id");
            $table->foreign("filter_id")->constrained();
            $table->foreign("resource_type_id")->contrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filter_resource_types');
    }
};

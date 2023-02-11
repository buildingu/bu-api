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
        Schema::create('resource_resource_footers', function (Blueprint $table) {
            $table->integer("resource_id");
            $table->integer("resource_footer_id");
            $table->foreign("resource_id")->constrained();
            $table->foreign("resource_footer_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resource_resource_footers');
    }
};

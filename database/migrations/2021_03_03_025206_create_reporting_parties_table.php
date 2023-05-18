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
        Schema::create('reporting_parties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reports_id');
            $table->string('name');
            $table->string('grade');
            $table->integer('contact_details');

            $table->foreign('reports_id')->references('id')->on('reports')->onDelete('cascade');
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
        Schema::dropIfExists('reporting_parties');
    }
};

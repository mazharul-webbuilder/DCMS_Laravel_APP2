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
        Schema::create('row_data', function (Blueprint $table) {
            $table->id();
            $table->integer('calculation_id');
            $table->string('month');
            $table->string('year');
            $table->string('total_meal');
            $table->string('overall_cost');
            $table->string('utility_pay');
            $table->string('utility_have_to_pay');
            $table->string('afran_toal_meal');
            $table->string('afran');
            $table->string('mazharul_total_meal');
            $table->string('mazharul');
            $table->string('rasel_total_meal');
            $table->string('rasel');
            $table->string('mostofa_total_meal');
            $table->string('mostofa');
            $table->string('arafat_total_meal');
            $table->string('arafat');
            $table->string('nirob_total_meal');
            $table->string('nirob');
            $table->string('unknown_total_meal');
            $table->string('unknown');
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
        Schema::dropIfExists('row_data');
    }
};

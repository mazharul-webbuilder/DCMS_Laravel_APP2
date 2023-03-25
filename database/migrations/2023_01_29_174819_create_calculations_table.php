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
        Schema::create('calculations', function (Blueprint $table) {
            $table->id();
            $table->string('month');
            $table->integer('year')->default(2023);
            $table->double('total_meal', 10, 2);
            $table->double('overall_cost', 10, 2);
            $table->double('food_cost', 10, 2);
            $table->double('utility_cost', 10, 2);
            $table->double('meal_rate', 10, 2);
            $table->double('utility_rate', 10, 2);

            $table->double('afran_total_meal', 10, 2);
            $table->double('afran_spend', 10, 2);
            $table->double('afran_payable', 10, 2);

            $table->double('mazharul_total_meal', 10, 2);
            $table->double('mazharul_spend', 10, 2);
            $table->double('mazharul_payable', 10, 2);

            $table->double('rasel_total_meal', 10, 2);
            $table->double('rasel_spend', 10, 2);
            $table->double('rasel_payable', 10, 2);

            $table->double('mostofa_total_meal', 10, 2);
            $table->double('mostofa_spend', 10, 2);
            $table->double('mostofa_payable', 10, 2);

            $table->double('arafat_total_meal', 10, 2);
            $table->double('arafat_spend', 10, 2);
            $table->double('arafat_payable', 10, 2);

            $table->double('nirob_total_meal', 10, 2);
            $table->double('nirob_spend', 10, 2);
            $table->double('nirob_payable', 10, 2);

            $table->double('unknown_total_meal', 10, 2);
            $table->double('unknown_spend', 10, 2);
            $table->double('unknown_payable', 10, 2);

            $table->integer('cooker_bill');


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
        Schema::dropIfExists('calculations');
    }
};

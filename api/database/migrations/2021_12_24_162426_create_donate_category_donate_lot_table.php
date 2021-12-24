<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateCategoryDonateLotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_category_donate_lot', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donate_category_id')->constrained();
            $table->foreignId('donate_lot_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donate_category_donate_lot');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRandomAndBreakdownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('random', function (Blueprint $table) {
            $table->id();
            $table->string('values');
        });
        Schema::create('breakdown', function (Blueprint $table) {
            $table->id();
            $table->string('values');
            $table->string('random_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('random');
        Schema::dropIfExists('breakdown');
    }
}

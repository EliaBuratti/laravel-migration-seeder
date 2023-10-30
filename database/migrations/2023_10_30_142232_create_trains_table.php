<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('society', 15);
            $table->string('station_departure', 50);
            $table->string('station_arrive', 50);
            $table->time('time_departure');
            $table->time('time_arrive');
            $table->string('code', 10);
            $table->smallInteger('carriages')->unsigned();
            $table->boolean('on_time');
            $table->boolean('deleted');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};

//             $table->date('department_date')->after('time_departure');

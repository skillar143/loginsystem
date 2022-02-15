<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_records', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->string('am_status');
            $table->string('timeIn_am');
            $table->string('timeOut_am')->nullable();
            $table->string('pm_status')->nullable();
            $table->string('timeIn_pm')->nullable();
            $table->string('timeOut_pm')->nullable();
            $table->date('doa');
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
        Schema::dropIfExists('time_records');
    }
}

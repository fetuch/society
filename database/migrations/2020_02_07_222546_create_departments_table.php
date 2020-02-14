<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 40)->unique();
            $table->unsignedBigInteger('president_id')->nullable();
            $table->unsignedBigInteger('secretary_id')->nullable();
            $table->unsignedBigInteger('paymaster_id')->nullable();
            $table->unsignedBigInteger('next_president_id')->nullable();
            $table->unsignedBigInteger('prev_president_id')->nullable();
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
        Schema::dropIfExists('departments');
    }
}

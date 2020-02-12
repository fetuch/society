<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('member_id');
            $table->string('period', 4);
            $table->decimal('amount', 8, 2);
            $table->string('p24_session_id');
            $table->string('p24_currency');
            $table->dateTime('paid_at');
            $table->boolean('confirmed')->default(false);
            $table->timestamps();

            $table->index('member_id');
            $table->index('period');

            $table->foreign('member_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membership_payments');
    }
}

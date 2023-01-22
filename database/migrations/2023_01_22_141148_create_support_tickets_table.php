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
        Schema::create('support_tickets', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable()->default(0);
            $table->string('name', 40)->nullable();
            $table->string('email', 40)->nullable();
            $table->string('ticket', 40)->nullable();
            $table->string('subject')->nullable();
            $table->boolean('status')->default(false)->comment('0: Open, 1: Answered, 2: Replied, 3: Closed');
            $table->boolean('priority')->default(false)->comment('1 = Low, 2 = medium, 3 = heigh');
            $table->dateTime('last_reply')->nullable();
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
        Schema::dropIfExists('support_tickets');
    }
};

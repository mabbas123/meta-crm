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
        Schema::create('user_extras', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->integer('paid_left')->default(0);
            $table->integer('paid_right')->default(0);
            $table->integer('free_left')->default(0);
            $table->integer('free_right')->default(0);
            $table->decimal('bv_left', 28, 8)->default(0);
            $table->decimal('bv_right', 28, 8)->default(0);
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
        Schema::dropIfExists('user_extras');
    }
};

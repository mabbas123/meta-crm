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
        Schema::create('plans', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('name', 40);
            $table->decimal('price', 28, 8)->default(0);
            $table->integer('bv')->nullable();
            $table->decimal('ref_com', 28, 8)->nullable();
            $table->decimal('tree_com', 28, 8)->nullable();
            $table->boolean('status')->default(true);
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
};

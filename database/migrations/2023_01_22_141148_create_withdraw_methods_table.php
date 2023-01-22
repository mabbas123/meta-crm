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
        Schema::create('withdraw_methods', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->unsignedInteger('form_id')->default(0);
            $table->string('name', 40)->nullable();
            $table->decimal('min_limit', 28, 8)->nullable()->default(0);
            $table->decimal('max_limit', 28, 8)->default(0);
            $table->decimal('fixed_charge', 28, 8)->nullable()->default(0);
            $table->decimal('rate', 28, 8)->nullable()->default(0);
            $table->decimal('percent_charge', 5)->nullable();
            $table->string('currency', 40)->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('withdraw_methods');
    }
};

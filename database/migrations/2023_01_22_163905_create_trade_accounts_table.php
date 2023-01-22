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
        Schema::create('trade_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users', 'id')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreignId('trade_group_id')
                ->nullable()
                ->constrained('trade_groups', 'id')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->string('account');
            $table->string('main_password')
                ->nullable();
            $table->string('investor_password')
                ->nullable();

            $table->integer('leverage')
                ->nullable();

            $table->boolean('is_real')
                ->default(true);

            $table->boolean('is_ib')
                ->default(false);

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
        Schema::dropIfExists('trade_accounts');
    }
};

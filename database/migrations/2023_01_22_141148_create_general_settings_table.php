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
        Schema::create('general_settings', function (Blueprint $table) {
            $table->comment('');
            $table->bigIncrements('id');
            $table->string('site_name', 40)->nullable();
            $table->string('cur_text', 40)->nullable()->comment('currency text');
            $table->string('cur_sym', 40)->nullable()->comment('currency symbol');
            $table->string('email_from', 40)->nullable();
            $table->text('email_template')->nullable();
            $table->string('sms_body')->nullable();
            $table->string('sms_from')->nullable();
            $table->string('base_color', 40)->nullable();
            $table->string('secondary_color', 40)->nullable();
            $table->text('mail_config')->nullable()->comment('email configuration');
            $table->text('sms_config')->nullable();
            $table->text('global_shortcodes')->nullable();
            $table->boolean('kv')->default(false);
            $table->boolean('ev')->default(false)->comment('email verification, 0 - dont check, 1 - check');
            $table->boolean('en')->default(false)->comment('email notification, 0 - dont send, 1 - send');
            $table->boolean('sv')->default(false)->comment('mobile verication, 0 - dont check, 1 - check');
            $table->boolean('sn')->default(false)->comment('sms notification, 0 - dont send, 1 - send');
            $table->boolean('force_ssl')->default(false);
            $table->boolean('maintenance_mode')->default(false);
            $table->boolean('secure_password')->default(false);
            $table->boolean('agree')->default(false);
            $table->boolean('registration')->default(false)->comment('0: Off	, 1: On');
            $table->string('active_template', 40)->nullable();
            $table->text('system_info')->nullable();
            $table->decimal('bv_price', 28, 8);
            $table->integer('total_bv')->default(0);
            $table->integer('max_bv')->default(0);
            $table->boolean('cary_flash')->default(false);
            $table->string('matching_bonus_time', 40)->nullable();
            $table->string('matching_when', 40)->nullable();
            $table->dateTime('last_paid')->nullable();
            $table->dateTime('last_cron')->nullable();
            $table->boolean('balance_transfer')->default(false);
            $table->decimal('balance_transfer_fixed_charge', 28, 8)->default(0);
            $table->decimal('balance_transfer_per_charge', 5)->default(0);
            $table->decimal('balance_transfer_min', 28, 8)->default(0);
            $table->decimal('balance_transfer_max', 28, 8)->default(0);
            $table->boolean('language')->default(false);
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
        Schema::dropIfExists('general_settings');
    }
};

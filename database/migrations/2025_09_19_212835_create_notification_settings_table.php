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
        Schema::create('notification_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->boolean('church_announcement')->default(true);
            $table->boolean('event_reminder')->default(true);
            $table->boolean('other')->default(false);
            $table->boolean('in_app')->default(true);
            $table->boolean('email')->default(true);
            $table->boolean('sms')->default(true);
            $table->boolean('mark_as_read_when_opened')->default(true);
            $table->boolean('delete_after_30_days')->default(false);
            $table->boolean('show_confirmation_before_deleting_notification')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notification_settings');
    }
};

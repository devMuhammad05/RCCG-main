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
        Schema::create('volunteer_signups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('volunteer_opportunity_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('email');
            $table->string('role_selected')->nullable();
            $table->tinyText('hours_selected')->nullable();
            $table->text('skills_experience')->nullable();
            $table->boolean('confirm_availability')->default(false);
            $table->boolean('agree_training')->default(false);
            $table->boolean('is_cancelled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_signups');
    }
};

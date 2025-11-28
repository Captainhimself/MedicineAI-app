<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   /* public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();

            $table->enum('subscription_type', ['daily','weekly','monthly','yearly'])->default('monthly');
            $table->date('subscription_expiry')->nullable();
            $table->boolean('is_trial')->default(true);
            $table->date('trial_ends_at')->nullable();

            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();
        });
    } */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};

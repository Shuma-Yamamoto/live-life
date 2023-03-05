<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'pgsql';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name', 100);
            $table->enum('category', ['oneman', 'bills', 'festival']);
            $table->boolean('attend_status');
            $table->dateTime('merch_start_at')->nullable($value = true);
            $table->dateTime('venue_open_at')->nullable($value = true);
            $table->dateTime('live_start_at')->nullable($value = true);
            $table->string('venue', 100)->nullable($value = true);
            $table->string('map_url', 255)->nullable($value = true);
            $table->dateTime('ticket_start_at')->nullable($value = true);
            $table->dateTime('ticket_end_at')->nullable($value = true);
            $table->boolean('ticket_status');
            $table->string('seat', 100)->nullable($value = true);
            $table->text('memo')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lives');
    }
};

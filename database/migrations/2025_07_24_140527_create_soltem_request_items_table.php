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
        Schema::create('soltem_request_items', function (Blueprint $table) {
            // $table->id();
            // $table->foreignId('soltem_request_id')->constrained()->onDelete('cascade');
            // $table->foreignId('soltem_id')->constrained()->onDelete('cascade');
            // $table->integer('quantity');
            // $table->timestamps();

            $table->id();
            $table->foreignId('soltem_request_id')->constrained()->onDelete('cascade');
            $table->foreignId('soltem_id')->constrained()->onDelete('cascade');
            $table->integer('quantity');

            // Tambahan
            $table->enum('status', ['pending', 'approved', 'returned', 'used'])->default('pending');
            $table->date('installed_at')->nullable();                // tanggal dipasang
            $table->string('installation_location')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soltem_request_items');
    }
};

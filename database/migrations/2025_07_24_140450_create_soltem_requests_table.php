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
        Schema::create('soltem_requests', function (Blueprint $table) {
            $table->id();

            $table->string('request_number')->unique();                                         // unique request number
            $table->foreignId('employee_id')
                ->constrained()
                ->onDelete('cascade');                                                          // yang mengajukan
            $table->string('ticket_number');
            $table->string('client_name');
            $table->foreignId('soltem_id')
                ->constrained()
                ->onDelete('restrict');
            $table->enum('status', ['pending', 'approved', 'rejected', 'returned'])
                ->default('pending');                                                           // status permintaan
            $table->date('request_date');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soltem_requests');
    }
};

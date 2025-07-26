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
        Schema::create('soltem_installations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('employee_id')
                ->constrained()
                ->onDelete('cascade');                  // yang melakukan instalasi
            $table->foreignId('soltem_request_id')
                ->constrained('soltem_requests')
                ->onDelete('cascade');                  // soltem yang diinstalasi
            $table->string('ticket_project');           // nomor tiket proyek
            $table->string('client_name');              // nama klien
            $table->date('installation_date');          // tanggal instalasi
            $table->text('installation_address');       // alamat instalasi
            $table->string('case_number')->nullable();  // nomor kasus, jika ada
            $table->string('category')->nullable();     // kategori instalasi, misal: CPE, Modem, etc.
            $table->string('access')->nullable();
            $table->string('pic_name')->nullable();     // nama PIC di lokasi instalasi
            $table->string('pic_contact')->nullable();  // kontak PIC di lokasi instalasi
            $table->text('complaint')->nullable();      // keluhan yang dilaporkan
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soltem_installations');
    }
};

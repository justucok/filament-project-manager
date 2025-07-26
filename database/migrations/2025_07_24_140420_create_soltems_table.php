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
        Schema::create('soltems', function (Blueprint $table) {
            $table->id();
            $table->string('name');                              // nama soltem, misal: NEA-03
            $table->string('cpe_type')->nullable();              // tipe perangkat CPE, misal: MIKROTIK RB750r2
            $table->string('cpe_registration')->nullable();      // nomor registrasi CPE
            $table->string('modem_type')->nullable();            // tipe modem GSM
            $table->string('modem_registration')->nullable();    // nomor registrasi modem
            $table->string('gsm_number')->nullable();            // nomor GSM, misal: 0812xxxx
            $table->string('data_quota')->nullable();            // nama paket, misal: Keluarga 26.31 GB
            $table->date('quota_expiry_date')->nullable();       // masa aktif kuota
            $table->date('sim_expiry_date')->nullable();         // masa aktif kartu SIM
            $table->enum('status', ['ready', 'out', 'used'])->default('ready');
            $table->text('notes')->nullable();                   // keterangan tambahan
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soltems');
    }
};

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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_admin')->default(false)->after('password');        // sebagai penanda admin
            $table->boolean('is_active')->default(true)->after('is_admin');        // disable user tanpa hapus
            $table->foreignId('employee_id')->nullable()->constrained()->nullOnDelete()->after('is_active'); // foreign key to employees tabl
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_admin');
            $table->dropColumn('is_active');
            $table->dropColumn('employee_id'); // remove foreign key
        });
    }
};

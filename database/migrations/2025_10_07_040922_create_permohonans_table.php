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
        Schema::create('permohonans', function (Blueprint $table) {
             $table->id();

            // Jenis Program
            $table->string('jenis_program')->nullable();

            // Soalan Tambahan (INSAN)
            $table->string('pengalaman_makanan')->nullable();
            $table->string('tifoid')->nullable(); // Ya/Tidak
            $table->string('jenis_makanan')->nullable();
            $table->string('ada_kenderaan')->nullable(); // Ya/Tidak
            $table->string('jenis_kenderaan')->nullable();

            // Maklumat Diri
            $table->string('nama');
            $table->string('no_kp')->unique();
            $table->string('jantina')->nullable();
            $table->string('bangsa')->nullable();
            $table->string('bangsa_lain')->nullable();
            $table->string('negeri')->nullable();
            $table->string('daerah')->nullable();
            $table->string('poskod')->nullable();
            $table->text('alamat')->nullable();
            $table->string('telefon')->nullable();
            $table->string('email')->nullable();
            $table->decimal('pendapatan', 10, 2)->nullable();
            $table->string('str')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permohonans');
    }
};

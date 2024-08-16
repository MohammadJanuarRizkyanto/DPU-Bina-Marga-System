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
        Schema::create('absensi', function (Blueprint $table) {
            $table->integer('id_absensi')->primary();
            $table->unsignedBigInteger('id_training');
            $table->unsignedBigInteger('id_test');
            $table->string('nip_pegawai');
            $table->date('tanggal');
            $table->integer('StatusTest_Done');
            $table->integer('jumlah_test');
            $table->timestamps(); // Menggunakan created_at dan updated_at

            // Foreign keys
            $table->foreign('id_training')->references('id')->on('pelatihan')->onDelete('cascade');
            $table->foreign('id_test')->references('id')->on('test')->onDelete('cascade');
            $table->foreign('nip_pegawai')->references('nip_pegawai')->on('pegawai')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensi');
    }
};

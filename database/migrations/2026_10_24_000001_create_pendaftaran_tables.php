<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nomor_pendaftaran', 32)->nullable()->unique();
            $table->string('nama_lengkap');
            $table->string('nisn', 10)->nullable()->index();
            $table->string('nik', 16)->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
            $table->text('alamat')->nullable();
            $table->string('kontak')->nullable();
            $table->string('nama_orang_tua')->nullable();
            $table->string('kontak_orang_tua')->nullable();
            $table->text('alamat_orang_tua')->nullable();
            $table->string('pekerjaan_orang_tua')->nullable();
            $table->string('nama_sekolah_asal')->nullable();
            $table->unsignedSmallInteger('tahun_lulus')->nullable();
            $table->string('nomor_ijazah')->nullable();
            $table->enum('status', [
                'Draft',
                'Menunggu Verifikasi',
                'Perlu Perbaikan',
                'Terverifikasi',
                'Diterima',
                'Tidak Diterima',
            ])->default('Draft');
            $table->text('catatan_panitia')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
        });

        Schema::create('dokumen_pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_id')->constrained('pendaftaran')->cascadeOnDelete();
            $table->string('jenis_dokumen');
            $table->string('path');
            $table->enum('status_verifikasi', ['Menunggu Verifikasi', 'Terverifikasi', 'Perlu Perbaikan'])
                ->default('Menunggu Verifikasi');
            $table->text('alasan')->nullable();
            $table->foreignId('diverifikasi_oleh')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('diverifikasi_pada')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokumen_pendaftaran');
        Schema::dropIfExists('pendaftaran');
    }
};

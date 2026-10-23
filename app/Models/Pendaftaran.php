<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';

    protected $fillable = [
        'user_id',
        'nomor_pendaftaran',
        'nama_lengkap',
        'nisn',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'kontak',
        'nama_orang_tua',
        'kontak_orang_tua',
        'alamat_orang_tua',
        'pekerjaan_orang_tua',
        'nama_sekolah_asal',
        'tahun_lulus',
        'nomor_ijazah',
        'status',
        'catatan_panitia',
        'submitted_at',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_lahir' => 'date',
            'submitted_at' => 'datetime',
            'tahun_lulus' => 'integer',
        ];
    }

    public const STATUSES = [
        'Draft',
        'Menunggu Verifikasi',
        'Perlu Perbaikan',
        'Terverifikasi',
        'Diterima',
        'Tidak Diterima',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dokumen(): HasMany
    {
        return $this->hasMany(DokumenPendaftaran::class, 'pendaftaran_id');
    }
}

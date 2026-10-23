<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DokumenPendaftaran extends Model
{
    protected $table = 'dokumen_pendaftaran';

    protected $fillable = [
        'pendaftaran_id',
        'jenis_dokumen',
        'path',
        'status_verifikasi',
        'alasan',
        'diverifikasi_oleh',
        'diverifikasi_pada',
    ];

    protected function casts(): array
    {
        return ['diverifikasi_pada' => 'datetime'];
    }

    public function pendaftaran(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class, 'pendaftaran_id');
    }
}

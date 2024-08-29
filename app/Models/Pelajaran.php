<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelajaran', 'guru_mapel', 'jam_mapel',
    ];

    protected $casts = [

    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

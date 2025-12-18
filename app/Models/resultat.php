<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class resultat extends Model
{
    protected $fillable = [
        'code',
        'codeEtudiant',
        'note',
        'appreciation',
        'pourcentage',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public static function generateUniqueCode(): string
    {
        do {
            $code = (string) Str::uuid();
        } while (self::where('code', $code)->exists());

        return $code;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Etudiant extends Model
{
    protected $fillable = [
        'code',
        'nom',
        'prenom',
        'classe',
        'promotion',
        'matricule',
        'departement',
        'email',
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

    public function resultat() {
        return $this->hasOne(resultat::class,'codeEtudiant','code');
    }
}

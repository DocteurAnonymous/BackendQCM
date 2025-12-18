<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Questionnaire extends Model
{
    protected $fillable = [
        'code', 'question',
        'option1', 'option2', 'option3', 'option4',
        'correct'
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

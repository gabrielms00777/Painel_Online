<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'cookie_id',
        'path',
        'ip',
    ];

    protected function casts(): array
    {
        return [
            'last_activity' => 'datetime',
        ];
    }
}

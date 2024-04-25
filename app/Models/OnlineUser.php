<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_id',
        'url',
        'ip',
        'last_activity',
    ];

    protected function casts(): array
    {
        return [
            'last_activity' => 'datetime',
        ];
    }
}

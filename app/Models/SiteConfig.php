<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_name',
        'contact_email',
        'description',
        'address',
        'phone',
        'facebook',
        'instagram',
        'twitter',
        'linkedin',
        'og_title',
        'og_description',
        'og_image',
        'og_url',
        'og_type',
    ];

    public static function getConfig()
    {
        return self::first();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'logo_partnerships';
    protected $fillable = [
        'user_id',
        'partner_name',
        'logo_img',
        'website_url',
    ];
}

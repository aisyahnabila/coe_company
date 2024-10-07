<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'status',
        'collaboration_type',
        'schema',
        'team',
        'fund_amount',
        'fund_currency',
        'start_date',
        'end_date'
    ];

    // Relasi dengan user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

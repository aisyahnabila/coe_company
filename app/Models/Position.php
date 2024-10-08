<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;
    protected $table = 'position_category';
    protected $fillable = [
        'position_name',
    ];
    public function staff()
    {
        return $this->hasMany(Staff::class, 'position_id');
    }
}

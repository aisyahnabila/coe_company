<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffMedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_id',
        'platform',
        'url',
    ];
    public function position()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffResearch extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_id',
        'research_field',
        'description',
    ];
    public function position()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }
}

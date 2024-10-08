<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffEducation extends Model
{
    use HasFactory;
    protected $table = 'staff_education';
    protected $fillable = [
        'staff_id',
        'degree',
        'major',
        'institution',
    ];

    public function position()
    {
        return $this->belongsTo(Staff::class, 'staff_id');
    }

}

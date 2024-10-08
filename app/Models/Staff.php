<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

    use HasFactory;
    protected $table = 'staff';
    protected $fillable = [
        'name',
        'position_id',
        'photo',
        'bio',
        'email',
    ];
    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    public function education()
    {
        return $this->hasMany(StaffEducation::class, 'staff_id');
    }
    public function media()
    {
        return $this->hasMany(StaffMedia::class, 'staff_id');
    }
    public function research()
    {
        return $this->hasMany(StaffResearch::class, 'staff_id');
    }

}

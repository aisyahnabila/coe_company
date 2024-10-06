<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'status', 'collaboration_type', 'funder', 'schema', 'team', 'fund_amount', 'fund_currency', 'start_date', 'end_date'];
}

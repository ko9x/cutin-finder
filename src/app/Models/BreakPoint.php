<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakPoint extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'name',
        'starts_at',
        'ends_at',
        'details',
    ];
}

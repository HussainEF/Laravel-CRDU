<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable = [
        'q_id',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        'option6',
    ];

    protected $attributes = [
        'option1' => 0,
        'option2' => 0,
        'option3' => 0,
        'option4' => 0,
        'option5' => 0,
        'option6' => 0,
    ];
}

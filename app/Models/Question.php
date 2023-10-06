<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'question',
        'option1',
        'option2',
        'option3',
        'option4',
        'option5',
        'option6',
    ];

    protected $attributes = [
        'option3' => 1,
        'option4' => 1,
        'option5' => 1,
        'option6' => 1,
    ];
}

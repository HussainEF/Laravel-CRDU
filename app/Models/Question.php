<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'question',
        'option1',
        'option2',
        'option3',
    ];

    protected $attributes = [
        'user_id' => 1,
        'option4' => 1,
        'option5' => 1,
        'option6' => 1,
    ];
}

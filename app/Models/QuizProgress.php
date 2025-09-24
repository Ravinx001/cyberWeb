<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class QuizProgress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'questionProgress',
        'correct_answers',
        'answered_questions',
        'status',
    ];

    protected $casts = [
        'answered_questions' => 'array',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Quiz;

class Question extends Model
{
    use HasFactory;
        protected $fillable = ['quiz_id', 'question', 'option1', 'option2', 'option3', 'option4', 'correct', 'points'];
    

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }
}

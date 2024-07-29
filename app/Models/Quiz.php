<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Quiz extends Model
{
    use HasFactory;
    protected $table = "quiz";
    protected $fillable = [
        'title',
        'subject',
        'grade',
        'creator',
        'user_id'
        ];


    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}



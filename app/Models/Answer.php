<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'no_of_likes', 'answer', 'created_by', 'question_id',
    ];

    public function question()
    {
        return $this->belongsTo('App\Models\Question','question_id');
    }
}

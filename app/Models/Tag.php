<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'name', 'display_name',
    ];

    public function question()
    {
        return $this->hasMany('App\Models\Question','tag_id');
    }
}

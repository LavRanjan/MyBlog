<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use mail;

class ContactUs extends Model
{
    //
    protected $fillable = [
        'name', 'email', 'subject','message'
    ];

    protected $table ="contact_uses";


}

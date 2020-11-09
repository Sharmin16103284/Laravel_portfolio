<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
    	'userName',
    	'userEmail',
    	'userPhone',
    	'userMsg',
    ];
    public $timestamps = false;
}

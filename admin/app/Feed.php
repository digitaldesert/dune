<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Feed extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'feeds';

    protected $fillable = [
        'username', 'password','login', 'type'
    ];
}

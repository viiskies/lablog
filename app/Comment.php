<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //php artisan make:model Comment
    protected $fillable = [
        'name', 'content', 'date',
    ];
}

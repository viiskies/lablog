<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Comment extends Model
{
    //php artisan make:model Comment
    protected $fillable = [
        'name', 'content', 'date',
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}

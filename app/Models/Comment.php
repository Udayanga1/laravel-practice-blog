<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function post()
    {
        return $this->belongsTo(Post::class); //laravel assumes that the foreign key is post_id
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id'); //overriding the default foreign key ('author_id') as user_id
    }
}

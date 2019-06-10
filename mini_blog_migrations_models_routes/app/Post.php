<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $guarded = [];
    
    public function comments()
    {
        return $this->hasMany("App\Comment", "post_id", "id");
    }
}

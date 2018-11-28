<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','category_id','content'];

    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Comment(){
        return $this->hasMany(Comment::class);
    }
}

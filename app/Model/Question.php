<?php

namespace App\Model;
use App\User;
// use App\Model\Reply;
// use App\Model\Category;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    public function category(){
        return $this->belongs(Category::class);
    }
}

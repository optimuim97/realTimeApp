<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //
    protected $guarded=[];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }


    public function likes(){
        return $this->hasMany(Like::class);
    }

    public function replies(){
        return $this->hasMany(Reply::class);
    }


    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }
}

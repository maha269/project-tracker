<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
//    $table = 'projects';
    protected $fillable = [
        'name', 'user_id',
    ];

    public function tasks(){
        return $this->hasMany('App\Task');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }

}

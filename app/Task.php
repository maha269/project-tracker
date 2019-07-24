<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'body', 'status', 'ended_at',
    ];
    public function tasks(){
        return $this->belongsTo('App\Project');
    }
}

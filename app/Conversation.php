<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
    ];


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}

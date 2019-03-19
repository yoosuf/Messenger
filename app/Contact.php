<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'email',
    ];



    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

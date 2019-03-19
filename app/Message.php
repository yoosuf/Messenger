<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'kind', 'content', 'attachment_tumb_url', 'attachment_url', 'is_seen'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

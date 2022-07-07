<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class visitor extends Model
{
    use Notifiable;
    protected $table = 'visitor';
    protected $fillable = ['name', 'email'];
    protected $dates = ['created_at', 'update_at'];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

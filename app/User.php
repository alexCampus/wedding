<?php

namespace App;

use App\Notifications\MailResetPasswordNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * @var string
     */
    protected $table = 'users_wedding';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'age'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function participants()
    {
        return $this->hasMany('App\Participant');
    }

    public function sendPasswordResetNotification($token)
    {
        // Your your own implementation.
        $this->notify(new MailResetPasswordNotification($token));
    }
}

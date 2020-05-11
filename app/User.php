<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Lessions;
use App\Models\Activities;
use App\Models\Followers;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function lessions()
    {
        return $this->hasMany(Lessions::class);
    }

    public function activities()
    {
        return $this->hasMany(activities::class);
    }

    public function followers()
    {
        return $this->hasMany(followers::class);
    }
}

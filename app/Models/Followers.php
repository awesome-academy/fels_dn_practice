<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Followers extends Model
{
    protected $table = 'followers';

    protected $fillable = [
        'follower_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

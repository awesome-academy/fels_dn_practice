<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'user_id',
        'action',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lessions extends Model
{
    protected $table = 'lessions';

    protected $fillable = [
        'category',
        'user_id',
        'result',
        'name' ,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function answers()
    {
        return $this->hasOne(Answers::class);
    }
}

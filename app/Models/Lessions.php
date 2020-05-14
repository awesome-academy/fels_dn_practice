<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;


class Lessions extends Model
{
    protected $table = 'lessions';

    protected $fillable = [
        'category_id',
        'user_id',
        'result',
        'name' ,
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    public function answers()
    {
        return $this->hasOne(Answers::class, 'answer_id');
    }
}

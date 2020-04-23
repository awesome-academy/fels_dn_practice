<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
    protected $fillable = [
        'category_id',
        'content',
        'name' ,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function answers()
    {
        return $this->hasOne(Answers::class);
    }

    public function choices()
    {
        return $this->hasOne(Choices::class);
    }
}

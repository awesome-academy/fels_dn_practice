<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Words extends Model
{
    protected $table = 'words';

    protected $fillable = [
        'category_id',
        'content',
        'name' ,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }

    public function answers()
    {
        return $this->hasOne(Answers::class, 'answer_id');
    }

    public function choices()
    {
        return $this->hasOne(Choices::class, 'choice_id');
    }
}

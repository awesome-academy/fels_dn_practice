<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choices extends Model
{
    protected $table = 'choices';

    protected $fillable = [
    	'word_id',
    	'content',
        'correct',
    ];

    public function answers()
    {
    	return $this->hasOne(Answers::class, 'answer_id');
    }

    public function words()
    {
    	return $this->belongsTo(Words::class, 'word_id');
    }
}

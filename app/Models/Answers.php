<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'answers';

    protected $fillable = [
        'choice_id',
        'word',
        'lession_id',
    ];

   public function words()
   {
        return $this->belongsTo(Words::class);
   }

   public function lession()
   {
        return $this->belongsTo(Lession::class);
   }

   public function choice()
   {
        return $this->belongsTo(Choice::class);
   }
}

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

   public function lessions()
   {
        return $this->belongsTo(Lessions::class);
   }

   public function choices()
   {
        return $this->belongsTo(Choices::class);
   }
}

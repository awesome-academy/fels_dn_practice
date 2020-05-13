<?php

namespace App\Repositories\Word;

use App\Models\Words;
use App\Repositories\BaseRepository;

class WordRepository extends BaseRepository implements WordRepositoryInterface
{
    public function getModel()
    {
        return Words::class;
    }
}

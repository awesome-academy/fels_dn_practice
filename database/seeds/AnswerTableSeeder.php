<?php

use App\Models\Answers;
use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Answers::class, 50)->create();
    }
}

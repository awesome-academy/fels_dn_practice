<?php

use App\Models\Choices;
use Illuminate\Database\Seeder;

class ChoiceTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Choices::class, 50)->create();
    }
}

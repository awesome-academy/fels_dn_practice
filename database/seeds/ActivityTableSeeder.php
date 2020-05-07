<?php

use App\Models\Activities;
use Illuminate\Database\Seeder;

class ActivityTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Models\Activities::class, 50)->create();
    }
}

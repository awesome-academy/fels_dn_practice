<?php

use App\Models\Lessions;
use Illuminate\Database\Seeder;

class LessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Lessions::class, 20)->create();
    }
}

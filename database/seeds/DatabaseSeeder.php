<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            CategoryTableSeeder::class,
            LessionTableSeeder::class,
            WordTableSeeder::class,
            ChoiceTableSeeder::class,
            AnswerTableSeeder::class,
            ActivityTableSeeder::class,
        ]);
    }
}

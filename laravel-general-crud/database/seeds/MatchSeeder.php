<?php

use Illuminate\Database\Seeder;
use App\MyMatch;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MyMatch::class, 10) -> create();
    }
}

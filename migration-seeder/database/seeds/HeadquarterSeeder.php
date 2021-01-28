<?php

use App\Headquarter;
use Illuminate\Database\Seeder;

class HeadquarterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Headquarter::class, 15)-> create();
    }
}

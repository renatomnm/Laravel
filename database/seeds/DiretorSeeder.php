<?php

use Illuminate\Database\Seeder;
//use App\Diretor;
use App\Filme;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Diretor::class)->times(10)->create();
        factory(App\Filme::class)->times(50)->create();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Diretor;
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
        //factory(App\Filme::class)->times(50)->create();

        $directors = factory(Diretor::class, 10)->create();
         foreach ($directors as $director) {
           // Criamos 5 filmes para cada diretor
           factory(Filme::class, 5)->create([
             'directors_id' => $director->id,
           ]);
         }
    }
}

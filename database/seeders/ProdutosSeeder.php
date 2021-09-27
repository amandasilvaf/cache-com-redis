<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Produto;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,1000) as $index){
            Produto::create([
                'descricao' => $faker->word,
                'preco' => $faker->randomFloat(2, 1, 1000)
            ]);
        }
    }
}

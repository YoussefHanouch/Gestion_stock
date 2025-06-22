<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                // Création des catégories de stock
                Categorie::create([
                    'nomCategorie' => 'Électronique'
                ]);
        
                Categorie::create([
                    'nomCategorie' => 'PC'
                ]);
        
                Categorie::create([
                    'nomCategorie' => 'Télé'
                ]);
    }
}

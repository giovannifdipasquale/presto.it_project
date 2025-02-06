<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker; // Usa Faker per generare dati casuali


class DatabaseSeeder extends Seeder
{

    public $categories = [
        'Tecnologia',
        'Moda',
        'Sport',
        'Cucina',
        'Musica',
        'Arredamento',
        'Libri',
        'Collezionismo',
        'Salute e Benessere',
        'Motori'
    ];

    public $icons = [
        'bi-laptop',
        'bi-bag',
        'bi-trophy',
        'bi-cup',
        'bi-music-note',
        'bi-house',
        'bi-book',
        'bi-box',
        'bi-heart-pulse',
        'bi-car-front',
    ];



    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        foreach ($this->categories as $i => $category) {
            Category::create([
                'name' => $category,
                'icon' => $this->icons[$i]
            ]);
        }
        // Crea un utente di esempio
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Crea articoli
        $faker = Faker::create('it_IT');
        foreach (range(1, 20) as $index) { // Genera 20 articoli

            Article::create([
                'title' => $faker->words(3, true),
                'price' => $faker->randomFloat(2, 10, 500),
                'description' => $faker->realTextBetween(100, 200),
                'category_id' => Category::inRandomOrder()->first()->id,
                'user_id' => $user->id,
            ]);
        }
    }
}
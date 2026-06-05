<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Dish;
use App\Models\DishCategory;
use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => bcrypt('password')]
        );

        $categories = collect([
            ['name' => 'Entrées', 'slug' => 'entrees'],
            ['name' => 'Plats', 'slug' => 'plats'],
            ['name' => 'Boissons', 'slug' => 'boissons'],
            ['name' => 'Desserts', 'slug' => 'desserts'],
        ])->mapWithKeys(function (array $category, int $index) {
            return [
                $category['slug'] => DishCategory::updateOrCreate(
                    ['slug' => $category['slug']],
                    ['name' => $category['name'], 'sort_order' => $index + 1, 'is_active' => true]
                ),
            ];
        });

        $dishes = [
            ['entrees', 'Carpaccio de bœuf', 'Entrée fraîcheur', 8500, 'img/548330204_122119031846968359_2643696780765774991_n.jpg'],
            ['entrees', 'Salade exotique Iguyzza', 'Mélange de fruits frais', 6500, 'img/561537983_122125478630968359_5990106595369622758_n.jpg'],
            ['plats', 'Filet de bœuf grillé', 'Accompagnement au choix', 12500, 'img/567521816_122125478618968359_1312821641899528111_n.jpg'],
            ['plats', 'Poulet braisé Iguyzza', 'Spécialité de la maison', 9500, 'img/571168370_122126454290968359_877040687061528344_n.jpg'],
            ['boissons', 'Cocktail Iguyzza', 'Signature du barman', 6000, 'img/576956323_122128832702968359_9044786545599895536_n.jpg'],
            ['boissons', 'Mojito passion', 'Rhum, menthe, fruits de la passion', 5500, 'img/577450349_122128832690968359_4123692393177002918_n.jpg'],
            ['desserts', 'Fondant au chocolat', 'Chocolat noir, cœur coulant', 4500, 'img/578495933_122128832654968359_1246669782403470621_n.jpg'],
            ['desserts', 'Tarte tatin mangue', 'Mangue fraîche, caramel beurre salé', 4000, 'img/578792574_122128832906968359_7952140690595437648_n.jpg'],
        ];

        foreach ($dishes as $index => [$categorySlug, $name, $description, $price, $image]) {
            Dish::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'dish_category_id' => $categories[$categorySlug]->id,
                    'name' => $name,
                    'description' => $description,
                    'price' => $price,
                    'image_path' => $image,
                    'is_active' => true,
                    'is_featured' => $index < 4,
                    'sort_order' => $index + 1,
                ]
            );
        }

        BlogPost::updateOrCreate(
            ['slug' => 'soirees-lounge-a-abidjan'],
            [
                'title' => 'Soirées lounge à Abidjan',
                'excerpt' => "Découvrez l'ambiance Iguyzza : cocktails, musique live et cadre tropical à Riviera Palmeraie.",
                'content' => "Iguyzza accueille vos soirées dans une atmosphère lounge, élégante et conviviale au cœur de Cocody.",
                'image_path' => 'img/bg1.jpg',
                'author_name' => 'Iguyzza',
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ]
        );

        BlogPost::updateOrCreate(
            ['slug' => 'notre-carte-du-moment'],
            [
                'title' => 'Notre carte du moment',
                'excerpt' => 'Plats signatures, grillades et spécialités pour vos déjeuners et dîners à Cocody.',
                'content' => 'Notre carte met en avant des recettes généreuses, des produits frais et des cocktails signature.',
                'image_path' => 'img/bg2.jpg',
                'author_name' => 'Iguyzza',
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ]
        );

        Event::updateOrCreate(
            ['slug' => 'soiree-lounge-iguyzza'],
            [
                'title' => 'Soirée lounge Iguyzza',
                'description' => 'Cocktails, ambiance musicale et espace VIP pour une soirée mémorable à Riviera Palmeraie.',
                'image_path' => 'img/event2.jpg',
                'starts_at' => now()->addDays(14)->setTime(20, 0),
                'ends_at' => now()->addDays(15)->setTime(2, 0),
                'is_published' => true,
            ]
        );
    }
}

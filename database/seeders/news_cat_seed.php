<?php

namespace Database\Seeders;

use App\Models\admin\news_cats;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class news_cat_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker_cats = [
            'ورزشی',
            'اجتماعی',
            'سیاسی',
            'اقتصادی',
        ];
        $faker = Factory::create('fa_IR');
        foreach ($faker_cats as $cat) {

            news_cats::create([
                'title' => $cat,
                'description' => $faker->realText(200),
                'parent_id' => null
            ]);
        }

    }
}

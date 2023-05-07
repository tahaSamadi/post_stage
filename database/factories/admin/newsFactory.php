<?php

namespace Database\Factories\admin;

use App\Models\admin\news_cats;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class newsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>rand(1,10) . 'عنوان اخبار',
            'short_note'=>$this->faker->words(5,true),
            'description'=>$this->faker->words(50,true),
            'cat_id'=>news_cats::all()->random(),
            'tags'=>'کلمه کلیدی',
            'state'=>'1',
            'state_main'=>'1',
            'state_header'=>'1',
            'pic'=>time()
        ];
    }
}

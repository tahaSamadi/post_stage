<?php

namespace Database\Seeders;

use App\Models\admin\menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class menu_type extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_type=['منوی فوتر','منوی بالای'];
        foreach ($menu_type as $item){
            \App\Models\admin\menu_type::create([
                'title'=>$item
            ]);
        }
    }
}

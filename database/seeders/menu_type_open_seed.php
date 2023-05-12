<?php

namespace Database\Seeders;

use App\Models\admin\menu_type_open;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class menu_type_open_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu_type_open=['آژاکس','صفحه جدید'];
        foreach ($menu_type_open as $menu_type){
            menu_type_open::create([
                'title'=>$menu_type
            ]);
        }
    }
}

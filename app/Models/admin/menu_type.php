<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu_type extends Model
{
    use HasFactory;
    protected $table='menu_type';
    public function menu(){
        return $this->hasMany(menu::class,'menu_type');
    }
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table="menu";
    protected $fillable=['title','menu_type','menu_type_open','parent_id'];
    public function sub_cats(){
        return $this->hasMany(menu::class,'parent_id');
    }

}

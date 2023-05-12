<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    protected $table="menu";
    protected $fillable=['title','menu_type_id','menu_type_open_id','parent_id'];
}

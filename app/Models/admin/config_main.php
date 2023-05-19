<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class config_main extends Model
{
    use HasFactory;
    protected $table='config_main';
    public $timestamps=false;
    protected $guarded=[];
}

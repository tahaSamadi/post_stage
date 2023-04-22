<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cats extends Model
{
    use HasFactory;
    protected $fillable=['title','slug','description','parent_id'];
    public function sub_cats(){
        return $this->hasMany(news_cats::class,'parent_id');
    }
}

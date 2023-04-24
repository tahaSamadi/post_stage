<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cats extends Model
{
    use HasFactory;
    protected array $lang_state=[];
    public function __construct()
    {
        $this->lang_state[0]='عدم نمایش';
        $this->lang_state[1]='نمایش';
    }

    protected $fillable=['title','slug','description','parent_id'];
    protected $appends = ['news_num'];
    public function sub_cats(){
        return $this->hasMany(news_cats::class,'parent_id');
    }
    public function getNewsNumAttribute(){
        return $this->hasMany(news_cats::class,'parent_id')->count();
    }
    public function getStateAttribute($value){
        return $this->lang_state[$value];
    }
    public function getStateHeaderAttribute($value){
        return $this->lang_state[$value];
    }
    public function getStateMainAttribute($value)
    {
        return $this->lang_state[$value];
    }
}

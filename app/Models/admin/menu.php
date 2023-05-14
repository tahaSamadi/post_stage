<?php

namespace App\Models\admin;

use App\Models\admin\trait\crud_trait;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory,crud_trait;
    protected $table="menu";
    protected $fillable=['title','menu_type','menu_type_open','parent_id'];
    public function sub_cats(){
        return $this->hasMany(menu::class,'parent_id');
    }
    public function menu_type_test(){
        return $this->belongsTo(menu_type::class,'menu_type')->select('id','title');
    }
    public function scopeFilter(Builder $builder, $title)
    {
        if (isset($title) && !empty($title)) {
            $builder->where('title', 'like', '%' . $title . '%');
        }
        return $builder;
    }
    public function get_created_at_verta(){
        return  (new Verta($this->created_at))->format('%B %d، %Y');
    }
}

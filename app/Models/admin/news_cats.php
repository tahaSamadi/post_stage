<?php

namespace App\Models\admin;

use App\Models\admin\crud\crud;
use Cviebrock\EloquentSluggable\Sluggable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cats extends Model
{
    use HasFactory,Sluggable;

    protected $fillable=['title','slug','description','parent_id','state','state_main','state_header'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function scopeFilter(Builder $builder, $title)
    {
        if (isset($title) && !empty($title)) {
            $builder->where('title', 'like', '%' . $title . '%');
        }
        return $builder;
    }

    public function scopeFilterType(Builder $builder, $parent_id)
    {
        if (isset($parent_id) && !empty($parent_id)) {
            $builder->where('parent_id', $parent_id);
        }
        return $builder;
    }
    public function sub_cats(){
        return $this->hasMany(news_cats::class,'parent_id');
    }
    public function get_created_at_verta(){
        return  (new Verta($this->created_at))->format('%B %d، %Y');
    }
    public function crud(array $params)
    {
        $class_name=__CLASS__;
        $class_current=(new $class_name);
        $crud=new crud($class_current,$params);
         return $crud->crud();
    }
}

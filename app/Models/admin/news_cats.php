<?php

namespace App\Models\admin;

use App\Models\admin\trait\convert_date;
use App\Models\admin\trait\crud_trait;
use Cviebrock\EloquentSluggable\Sluggable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cats extends Model
{
    use HasFactory,Sluggable,crud_trait,convert_date;

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
        return $builder->where('parent_id', $parent_id);
    }
    public function sub_cats(){
        return $this->hasMany(news_cats::class,'parent_id');
    }
    public function news(){
        return $this->hasMany(news::class,'cat_id');
    }
    public function get_created_at_verta(){
        return  (new Verta($this->created_at))->format('%B %d، %Y');
    }


}

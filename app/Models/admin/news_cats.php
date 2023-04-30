<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cats extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'description', 'parent_id','state'];

    public function sub_cats()
    {
        return $this->hasMany(news_cats::class, 'parent_id');
    }


    public function scopeFilter(Builder $builder,$title)
    {
        if (isset($title) && !empty($title)) {
            $builder->where('title', 'like', '%' . $title . '%');
        }
        return $builder;
    }
    public function scopeFilterType(Builder $builder,$parent_id){
        if (isset($parent_id) && !empty($parent_id)) {
            $builder->where('parent_id',$parent_id);
        }
        return $builder;
    }
    public function news_cats_change_state(string $column_name,$items_id){

        foreach ($items_id as $id) {
            $news_cat = news_cats::find($id);
            if($news_cat->state=='1'){
                $news_cat->update([$column_name=>'0']);
            }
            else{
                $news_cat->update([$column_name=>'1']);
            }
        }
    }
}

<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_cats extends Model
{
    use HasFactory;

    protected array $lang_state = [];

    public function __construct()
    {
        $this->lang_state[0] = 'عدم نمایش';
        $this->lang_state[1] = 'نمایش';
    }

    protected $fillable = ['title', 'slug', 'description', 'parent_id'];

    public function sub_cats()
    {
        return $this->hasMany(news_cats::class, 'parent_id');
    }

    public function getStateAttribute($value)
    {
        return $this->lang_state[$value];
    }

    public function getStateHeaderAttribute($value)
    {
        return $this->lang_state[$value];
    }

    public function getStateMainAttribute($value)
    {
        return $this->lang_state[$value];
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
}

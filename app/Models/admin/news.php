<?php

namespace App\Models\admin;

use App\Models\admin\trait\crud_trait;
use Cviebrock\EloquentSluggable\Sluggable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory,Sluggable,crud_trait;
    protected $fillable=['title','short_note','tags','pic','cat_id','description','slug','state','state_main','state_header'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function get_created_at_verta(){
        return  (new Verta($this->created_at))->format('%B %d، %Y');
    }
    public function news_get(){
        return $this->belongsTo(news_cats::class,'cat_id')->select('id','title','slug');
    }
    public function scopeFilter(Builder $builder, $title)
    {
        if (isset($title) && !empty($title)) {
            $builder->where('title', 'like', '%' . $title . '%');
        }
        return $builder;
    }
}

<?php

namespace App\Models\admin;

use App\Models\admin\trait\convert_date;
use App\Models\admin\trait\crud_trait;
use Illuminate\Database\Eloquent\Builder;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class   page extends Model
{
    use HasFactory,crud_trait,convert_date;
    protected $fillable=['title','pic','url','note'];
    public function scopeFilter(Builder $builder,array $params){
        if(isset($params['title'])){
            $builder->where('title','like','%'.$params['title'].'%');
        }
        if(isset($params['url'])){
            $builder->where('url','like','%'.$params['url'].'%');
        }
        return $builder;
    }
}

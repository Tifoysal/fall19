<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    //
use SoftDeletes;
    protected $fillable=['name','category_id','price','description','status'];

    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }


}

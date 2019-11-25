<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //

    protected $fillable=['name','category_id','price','description','status'];

    public function category()
    {
        return $this->belongsTo(Category::class,'id','category_id');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

   // protected $table = '';
    protected $fillable = ['name', 'description' , 'image'];

    public function store(){
        return $this->hasMany('App\Models\Store');
    }
}

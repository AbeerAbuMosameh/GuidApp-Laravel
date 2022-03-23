<?php

namespace App\Models;
use App\Models\Category;
use App\Models\Rate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function Category(){
        return $this->belongsTo('App\Models\Category' , 'Category_id');
        }

    public function rating(){
        return $this->hasMany('App\Models\Rate');
        }

    //fill column
    protected $fillable = ['name', 'description', 'image','address','Category_id'];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Store;


class Rate extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['ipaddress', 'Store_id','stars_rated'];


    public function store(){
        return $this->belongsTo('App\Models\Store');
    }
}

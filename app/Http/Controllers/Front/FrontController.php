<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Store;

class FrontController extends Controller
{

    public function welcome(){
        //return all categorise
       $categories= Category::all();
       $stores= Store::all();
       return view('Front.site')->with('categories',$categories)->with('stores',$stores);
    }

    public function result($id , $name){
        $name=$name;
        $stores= Store::where('Category_id',$id)->get();
        $categories= Category::all();

        return view('Front.store')->with('stores',$stores)->with('name',$name)->with('categories',$categories);

    }



}

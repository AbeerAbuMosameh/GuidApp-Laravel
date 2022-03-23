<?php
namespace App\Http\Controllers\API\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Back\Post;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function index(){
        //return all categorise
        $stores =DB::select('select * from stores');

        return response()->json( $stores);
    }
}

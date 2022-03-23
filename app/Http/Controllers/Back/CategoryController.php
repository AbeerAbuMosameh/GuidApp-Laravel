<?php
namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use  App\Models\Category;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Back\Post;
use Illuminate\Support\Facades\DB;
use App\Models\Store;



class CategoryController extends Controller
{

    public function index(){
        //return all categorise
        $categories= Category::with('Store')->get();
         //dd($categories->toarray());
         //save fall link of category image
         foreach($categories as $category){
         $img_link = Storage::url($category->image);
         $category->image = $img_link;
         }

       // return response()->json($categories);
     return view('Back.category.index1')->with('categories',$categories);
    }

    public function show($id){
       //return all categorise
       $category= Category::find($id);
       return view('Back.category.show')->with('category',$category);
    }

    public function edit($id){
        //return all categorise
       // $category= DB::table('categories')->where('id',$id)->limit(1)->get();

        $category= Category::find($id);
        return view('Back.category.edit')->with('category',$category);
    }
    public function create(){
        return view('Back.category.create');
    }

    public function store(CategoryRequest $request){

        //dd($request->all());
        //get data from form and create row/obj in db
        // $name = $request['name'];
        // $description = $request['description'];
        $image = $request->file('image');
        $path ="uploads/img/";
        $imgname = time()+rand(1,10000000).'.'.$image ->getClientOriginalExtension();
        Storage::put($path.$imgname , file_get_contents($image));
        $input = $request->all();
        $input['image']= $path.$imgname;

        Category::create($input);


       // $Category = Category::create($input);
        // obj of category using model
        // $Category = NEW Category();
        // $Category->name=$name;
        // $Category->description=$description;
        // $Category->image=$path.$imgname;
        //add to DB
        // $result= $Category->save();

        Session::flash('success', 'category Added Successfully');

        return redirect(route('categories.index'));
     }

     public function update(UpdateCategoryRequest $request , $id){
     //   dd($request->all());
        $category= Category::find($id);
        $input = $request->all();
        if($request->has('image')){
            $image = $request->file('image');
            $path ="uploads/img/";
            $imgname = time()+rand(1,10000000).'.'.$image ->getClientOriginalExtension();
            Storage::put($path.$imgname , file_get_contents($image));
            $input['image']= $path.$imgname;
        }
        $category = $category->update($input);
        Session::flash('success', 'category Updated Successfully');

        return redirect(route('categories.index'));
     }

    public function destroy($id){
        //return all categorise

        $category= Category::find($id);
        $category->delete();
        return redirect()->back();
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $data= Category::query()
        //callback function
            ->join('stores', 'stores.Category_id', 'categories.id')
            ->where( function($query) use ($search) {
                $query->where('categories.name', 'LIKE', "%{$search}%");
                $query->orwhere('categories.description', 'LIKE', "%{$search}%");
            })
            ->orwhere( function($query) use ($search) {
                $query->where('stores.name',  'LIKE', "%{$search}%");
                $query->orwhere('stores.description', 'LIKE', "%{$search}%");
            })
            ->get();

        // Return the search view with the resluts compacted
        //dd($data);

        if($request->ajax()){
            return response()->json($data);
       }

        return view('Back.category.search', compact('data'));
    }
}

<?php

namespace App\Http\Controllers\Back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use Phpml\Regression\LeastSquares;


class StoreController extends Controller
{
    use SoftDeletes;

    public function index()
    {
        $stores = Store::with('Category')->select('*')->get();


        //save fall link of category image
        foreach ($stores as $store) {
            $img_link = Storage::url($store->image);
            $store->image = $img_link;
        }

        return view('Back.store.index')->with('stores', $stores);
    }

    public function storesRate()
    {
        $stores = Store::all();
        $trend = 0;

        foreach ($stores as $store) {
            $x = $store->rating();
            $y = $store->rating();

        }
        //     $regression = new \Phpml\Regression\LeastSquares();
        //     $regression->train($x, $y);
        //    $regression->predict([428]);

        // foreach ($stores as $store) {
        //     $img_link = Storage::url($store->image);
        //     $store->image = $img_link;
        // }

        return view('Back.stores_rates')->with('stores', $stores)->with('trend',$trend);
    }

    public function create()
    {
        // $stores= Store::select()->paginate(6);
        $categories = Category::select()->get();
        return view('Back.store.create')->with('categories', $categories);
    }

    public function store(StoreRequest $request)
    {
        $name = $request['name'];
        $address = $request['address'];
        $description = $request['description'];
        $Phone = $request['Phone'];
        $Category_id = $request['Category_id'];
        $image = $request->file('image');


        $path = "uploads/img/";
        $imgname = time() + rand(1, 10000000) . '.' . $image->getClientOriginalExtension();
        Storage::put($path . $imgname, file_get_contents($image));

        $Store = new Store();

        $Store->name = $name;
        $Store->description = $description;
        $Store->address = $address;
        $Store->Phone = $Phone;
        $Store->Category_id = $Category_id;
        $Store->image = $path . $imgname;

        //add to DB
        $result = $Store->save();

        Session::flash('success', 'Store Added Successfully');

        // return redirect()->back();
        return redirect()->back();
    }

    public function edit($id)
    {
        $store = Store::find($id);
        $categories = Category::select()->get();
        return view('Back.store.edit')->with('store', $store)->with('categories', $categories);
    }

    public function show($id)
    {
        //return all stores
        $store = Store::find($id);
        $categories = Category::select()->get();
        return view('Back.store.show')->with('store', $store)->with('categories', $categories);
    }

    public function update(UpdateStoreRequest $request, $id)
    {
        $store = Store::find($id);
        // dd($store);
        $input = $request->all();
        //   dd($input);
        if ($request->has('image')) {
            $image = $request->file('image');
            $path = "uploads/img/";
            $imgname = time() + rand(1, 10000000) . '.' . $image->getClientOriginalExtension();
            Storage::put($path . $imgname, file_get_contents($image));
            $input['image'] = $path . $imgname;
        }

        $store = $store->update($input);
        Session::flash('success', 'category Added Successfully');

        return redirect(route('stores.index'));
    }

}

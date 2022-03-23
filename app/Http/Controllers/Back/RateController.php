<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\RateRequest;
use App\Models\Rate;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class RateController extends Controller
{
    public function addRating(RateRequest $request)
    {
        $r=Rate::create($request->all());
        $store = Store::where('id',$r->Store_id)->first()->name;
        Session::flash('success', 'Rate Added Successfully for '.$store);
        return redirect()->back();
    }
}

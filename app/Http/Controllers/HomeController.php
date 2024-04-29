<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function AddProduct(Request $request)
    {
        $data = new Product;
        $data->title = $request->productTitle;
        $data->description = $request->productDesc;
        if ($request->hasFile('productImg')) {
            $image = $request->productImg;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $data->image = $imagename;
        } else {
            return redirect()->back()->with('error', 'Please upload an image.');
        }
        $data->save();

        return redirect()->back();
    }
}
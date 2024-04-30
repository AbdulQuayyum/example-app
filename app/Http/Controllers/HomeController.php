<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function AddProduct(Request $request) {
        $data = new Product;
        $data->title = $request->productTitle;
        $data->description = $request->productDesc;
        if ($request->hasFile('productImg')) {
            $image = $request->productImg;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $data->image = $imagename;
        }
        $data->save();

        return redirect()->back();
    }

    public function ShowProduct() {
        $data = Product::all();
        return view('product', compact(('data')));
    }

    public function DeleteProduct($id)
    {
        $data = Product::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function EditProduct($id) {
        $data = Product::find($id);
        return view('productEdit', compact('data'));
    }

    public function ProductEdit(Request $request, $id) {
        $data = Product::find($id);
        $data->title = $request->productTitle;
        $data->description = $request->productDesc;
        if ($request->hasFile('productImg')) {
            $image = $request->productImg;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('product', $imagename);
            $data->image = $imagename;
        }
        $data->save();

        return redirect()->back();
    }
}
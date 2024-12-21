<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('admin.ProductPage', ['products' => $products]);
    }

    public function AddProductİndex(){
        return view('admin.AddProduct');
    }

    public function addproduct(Request $request){
        $request->validate([
            'title'=> 'required|string|max:191',
            'content'=> 'required|string|max:191',
            'image'=> 'required|string|max:191',
            'price'=> 'required|integer|max:191',
            'link'=> 'required|string|max:191'
        ]);

        try{
            
        }
        return view('product');
    }

    

}
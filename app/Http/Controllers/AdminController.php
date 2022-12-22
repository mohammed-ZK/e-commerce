<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category(){
        $data = category::all();
        return view('admin.category',compact('data'));
    }
    public function add_category(Request $request){

        $data = new Category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with("message","success");
        
    }
    public function delete_category($id){
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message','delete success');
    }

    public function view_product(){
        $data = Category::all();
        return view('admin.products',compact('data'));
    }
    public function add_product(Request $request){

        $data = new Product;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->discount_price = $request->discount_price;
        $data->category = $request->category;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product',$imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with("message","success");
        
    }
}

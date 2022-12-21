<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function product(){
        $data = product::all();
        return view("admin.product", compact('data'));
    }

    public function uploadproduct(Request $request){
        $data = new product;
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->quantity = $request->quantity;
        $data->price = $request->price;



        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('productimage', $imagename);

        $data->image = $imagename;

        $data->save();

        return redirect()->back()->with('message', 'Product successfully Added');

    }

    public function allproduct()
    {
        $data=product::all();

        return view('admin.components.allproduct', ['data' => $data]);
    }

    public function updateproduct($id)
    {
        $data=product::find($id);
        return view('admin.updateproduct', ['data' => $data]);
    }

    public function updateproductdone(Request $request, $id)
    {
        $data=product::find($id);
        $image = $request->image;
// If user do not update the image it should ignore it
        if($image){
        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('productimage', $imagename);
        $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->quantity = $request->quantity;
        $data->price = $request->price;


        $data->save();

        return redirect()->back()->with('updatemessage', "$data->title information has been updated successfully");
    }

    public function deleteproduct($id)
    {
        $data=product::find($id)->delete();
        return redirect()->back()->with('deletesuccessmessage', "Product has been deleted successfully");
    }


}

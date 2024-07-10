<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function listProduct(){
        $listProducts = DB::table('product')
        ->join('category','category.id','=','product.category_id')
        ->select('product.id','product.name','product.price','product.view','product.category_id','category.name as category')
        ->orderBy('view','desc')
        ->get();

        // dd($listProducts);
        return view('products.listProduct')->with([
            'listProducts' => $listProducts
        ]);
    }

    public function addProduct(){
        $categories = DB::table('category')
        ->get();

        return view('products.addProduct')->with([
            'categories' => $categories
        ]);
    }
 
    public function add_Product(Request $req){
        $data = [
            'name'=> $req->name,
            'price' => $req->price,
            'view' => $req -> view,
            'category_id' => $req->category,
            'create_at' => Carbon::now(),
            'update_at' => Carbon::now()
        ];

        DB::table('product')->insert($data);

        return redirect() -> route('product.list');
    }
    
    public function del_Product($id){
        DB::table('product')->where('id','=',$id)->delete();
        return redirect() -> route('product.list');

    }

    public function editProduct($id){
        $categories = DB::table('category')
        ->get();
        $product = DB::table('product')->where('id','=',$id)->first();

        return view('products.editProduct')->with([
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function update_Product(Request $req, $id){
        $data = [
            'name'=> $req->name,
            'price' => $req->price,
            'view' => $req -> view,
            'category_id' => $req->category,
            'update_at' => Carbon::now()
        ];

        DB::table('product')->where('id','=',$id)->update($data);

        return redirect() -> route('product.list');
    }
    public function find_Product(Request $req){
        $data =  $req->name;
        $listProducts = DB::table('product')->join('category','category.id','=','product.category_id')
        ->select('product.id','product.name','product.price','product.view','product.category_id','category.name as category')
        ->where('product.name','like','%'.$data.'%')->orderBy('view','desc')->get();

        return view('products.listProduct')->with([
            'listProducts' => $listProducts
        ]);
    }
  
}

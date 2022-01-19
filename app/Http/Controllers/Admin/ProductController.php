<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function loadProduct(){
       
            $data =DB::table('products')->paginate(4);  
            return view('admin.products.index',compact('data'));
    }
    public function handleRequestSwap($request1){
            if($request1 == 100000){
                $data =DB::table('products')
                ->where('price','<=',$request1)->paginate(4);
                return view('admin.products.index',compact('data'));      
            }else if($request1 == 200000){
                $data =DB::table('products')
                ->where('price','>=',$request1)->paginate(4);
                return view('admin.products.index',compact('data'));
            } else if($request1 == '1'){
                $data =DB::table('products')
                ->where('price','>=','100000')
                ->where('price','<=','200000')->paginate(4);
                return view('admin.products.index',compact('data'));
            }else if($request1 == 'stock'){
                $data = Product::orderBy('stock')->paginate(4);
                // $data =DB::table('products')
                // ->sortBy($request1)->get()->paginate(4);
                return view('admin.products.index',compact('data'));
            }
    }
    public function viewCreate(){
        $data =DB::table('products')->select('type')->distinct()->get();
        return view('admin.products.create',compact('data'));
    }
    public function createProduct(Request $request){
        $countPrd = Product::all()->count();
        $date = Date('Y m d');
        $randomID = 'f'.$date .'pr' . $countPrd;
        $products = new Product;
        
        $products->id = $randomID;
        $products->name = $request->name;
        $products->description = $request->description;
        $products->stock = $request->stock;
        $products->price = $request->price;
        $products->type = $request->type;
        $products->image = "";
        $products->unit = $request->unit;
        $products->status = 1; 
        $products->save();
        return redirect()->route('admin.product');
    }

    public function deleteProduct($id){
        $products = Product::find($id);       
        if($products !=null){       
            $products->delete();  
            return redirect()->route('admin.product');
        }      
    }

    public function Search(Request $request){
        if(isset($_GET['keyWord'])){
            $searchText = $_GET['keyWord'];
            $data = DB::table('products')->where('name','LIKE','%'.$searchText.'%')->paginate(2);
            return view('admin.products.index',compact('data'));
        }else{
            return view('admin.dashboard');
        }
    }
}

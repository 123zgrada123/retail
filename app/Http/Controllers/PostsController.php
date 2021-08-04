<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Store;
use App\Models\Url;

class PostsController extends Controller
{
    public function storesCreate(){
        return view('posts.storesCreate');
    }

    public function createStore(){
        request()->validate([
            'name'=>'required',
            'code'=>'required',
            'base_url'=>'required',
        ]);

        Store::create([
            'name'=>request('name'),
            'code'=>request('code'),
            'base_url'=>request('base_url'),
            'name'=>request('name'),

        ]);
    }
    public function storesUpdate(){
        return view('posts.storesUpdate');
    }

    public function updateStore(){
        
        request()->validate([
            'name'=>'required',
            'code'=>'required',
            'base_url'=>'required',
        ]);
        
        $store=Store::where('code',request('oldCode'))->get();
       
                $store[0]->update([
                    'name'=>request('name'),
                    'code'=>request('code'),
                    'base_url'=>request('base_url'),
                    'name'=>request('name'),
                    'description'=>request('description')

                ]);
            
        
    }

    public function storesDelete(){
        return view('posts.storesDelete');
    }

    public function deleteStore(){
        request()->validate([
            'code'=>'required'
        ]);
        
        $store=Store::where('code',request('code'))->get();
        $products=Products::all();
        foreach($products as $product){
            if ($product->store_id==$store[0]->id){
                $product->update([
                    'store_id'=>0
                ]);
            }
        }
  
        $store[0]->delete(); 
    }

    public function readStore(){
        $stores=Store::all();
        request()->validate([
            'code'=>'required'
        ]);

        $store=Store::where('code',request('code'))->get();
           
        if ($store[0]->code==request()->code){
           echo($store);
        }
    }

    public function storesRead(){
       return view('posts.storesRead');
    }

    public function productCreate(){
        return view('posts.productCreate');
    }

    public function createProduct(){
        request()->validate([
            'name'=>'required',
            'sku'=>'required',
            'price'=>'required',
        ]);

        $id=0;
        if (request('shop')!=""){
            $stores=Store::all();
            foreach($stores as $store){
                if ($store->name==request()->shop){
                    $id=$store->id;
                    break;
                }
            }
        }

       $product= Products::create([
            'name'=>request('name'),
            'store_id'=>$id,
            'sku'=>request('sku'),
            'description'=>request('description'),
            'price'=>request('price'),
        ]);

        
        Url::create([
             'url'=>request('url'),
             'url_id'=>$product->id,
            'url_type'=>'product',
         ]);
    }

    public function productRead(){
        return view('posts.productRead');
    }

    //cita sve proizvode iz prodavnice da testira da li radi foreign key
    public function readProduct(){
        $stores=Store::all();
        $id=0;
        foreach($stores as $store){
           
            if ($store->name==request()->shop){
                $id=$store->id;
                break;
            }
        }
       $products=Store::find($store->id)->products;
       echo($products);
    }

    public function productUpdate(){
        return view('posts.productUpdate');
    }

    public function updateProduct(){
        request()->validate([
            'sku'=>'required',
        ]);
        $products=Products::all();

        $product=Products::where('sku',request('sku'))->get();
        $id=$product[0]->id;

        if(request('shop')!=""){
             $shop = Store::where('name', request('shop'))->get();
             $id=$shop[0]->id;
        }

        foreach($products as $product){       
          if ($product->sku==request()->sku){
                $product->update([
                    'name'=>request('name'),
                    'sku'=>request('skuNew'),
                    'store_id'=>$id,
                    'description'=>request('description'),
                    'price'=>request('price'),

                ]);
            }
        }
    }

    public function deleteProduct(){
        return view('posts.productDelete');
    }

    public function productDelete(){
        request()->validate([
            'sku'=>'required'
        ]);
        $product=Products::where('sku',request('sku'))->get();   
        $product[0]->delete();
    } 
}

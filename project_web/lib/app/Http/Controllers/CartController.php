<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Product;
use App\Models\Category;
use Mail;
class CartController extends Controller
{
    public function getAddCart($id){
    	$product=Product::find($id);
    	Cart::add(['id' => $id, 'name'=>$product->prod_name, 'quantity'=>1, 'price' => $product->prod_price, 'attributes' =>['img'=> $product->prod_img]]);
    	return redirect('cart/show');
    }
    public function getShowCart(){
    	$data['categories']= Category::all();
    	$data['items']= Cart::getContent(); 
    	$data['total']= Cart::getTotal(); 
    	return view('frontend.cart',$data);
    }
    public function getDeleteCart($id){
    	if($id=='all'){
    		Cart::clear();
    		
    	}else{
            Cart::remove($id);
        }
    	return back();
    }
    public function getUpdateCart(Request $request){
    	Cart::update($request->id,$request->quantity);
    }
    public function postComplete(Request $request){
    	$data['info'] = $request->all();
        $data['categories']= Category::all();
    	$email = $request->email;
    	$data['total'] = Cart::getTotal();
    	$data['cart'] = Cart::getContent();
    	Mail::send('frontend.email', $data, function ($message) use($email){
            $message->from('hungjame2308@gmail.com', 'JH-Shop');
        
            $message->to($email, $email);
        
            $message->cc('hungthe238@gmail.com', 'Mr Hung');
        
            $message->subject('Xác nhận hóa đơn mua hàng JH-Shop');
        });
        Cart::clear();
    	return redirect('complete');
    }
    public function getComplete(){
        $data['categories']= Category::all();
    	return view('frontend.complete',$data);
    }
}

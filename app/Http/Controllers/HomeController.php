<?php

namespace App\Http\Controllers;
use App\Models\Product; 
use App\Models\Setting; 
use App\Models\Review; 
use App\Models\categoryproduct; 
use App\Models\Category;
use App\Models\Comment;
use App\Models\EndMessage;
use App\Models\Message;
use App\Models\NewMessage;
use App\Models\NewMessage2;
use Illuminate\Http\Request;

use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public  function index()
    {
        $sliderdata=Product::limit(15)->get();
        $setting= Setting::first();
        $productlist1=Product::limit(15)->get();
        $productlist2=Product::limit(3)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'productlist1'=>$productlist1,
            'productlist2'=>$productlist2,
            'setting'=>$setting,

        ]);

   
    }



    public static function maincategorylist() {

        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function product($id)
    {

     $data = Product::find($id);
     $images = DB::table('images')->where('product_id',$id)->get();
     $reviews = Comment::where('product_id',$id)->get();
        return view('home.product',[
            'data'=>$data,
            'images'=>$images,
            'reviews'=>$reviews,
            

        ]);

   
    }

    
    public function storecomment(Request $request)
    {
              
            $data = new Comment();
            $data->user_id = Auth::id();
            $data->product_id = $request->input('product_id');
            $data->subject = $request->input('subject');
            $data->review = $request->input('review');
            $data->rate = $request->input('rate');
            $data->ip =request()->ip();
            $data->save();
            return redirect()->route('product',['id'=>$request->input('product_id')])->with('info','Your comment has been sent , Thank you ');
    

   
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request) {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],

        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/adminpanel');

        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    


    }


    

    public function references() {
        
        $setting= Setting::first();

        return view('home.references', [
            'setting'=> $setting
        ]);
                                 }
                                 public function aboutus() {
                               
                                    $setting= Setting::first();
                     
                                    return view('home.aboutus', [
                                        'setting'=> $setting
                                    ]);
                                                             }          
                                                             
                                                             public function contactus() {
        
                                                                $setting= Setting::first();
                                                        
                                                                return view('home.contactus', [
                                                                    'setting'=> $setting
                                                                ]);
                                                                                         }      



                  
                                                                                         public function faq() {

                                                                                            return view('home.faq');
                                                                                        } 
                                                                                         

    public function categoryproduct($id) {
        $category = Product::find($id);
        $products = DB::table('products')->where('category_id',$id)->get();
       
        return view('home.categoryproduct',[
            'data'=>$category,
            'products'=>$products,
            

        ]);

        
    }

    public function storemessage(Request $request) {
            
        $data = new EndMessage();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();
        return redirect('/');
    }

    public function test() {

        return view('home.test');
    }

    public function param($id,$number) {

     //   echo "Parameter 1:" , $id;
       // echo "<br>Paramter 2:",$number;
        // echo "<br>Sum Paramters :" , $id+$number;

        return view('home.test2', 
        [

            'id' => $id,
            'number' => $number,
        ]);
    

    }

    public function save(Request $request) {
        //echo "save function<br>";
        //echo "Name :",$_REQUEST["fname"];
        
        //echo "LName :",$_REQUEST["lname"];

        return view('home.test2', 
        [

            'id' => $_REQUEST["fname"],
            'number' => $_REQUEST["lname"],
        ]);
    }
    
}

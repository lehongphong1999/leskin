<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\categories;
use App\products;
use App\news;
use App\intros;
use App\users;
use App\news_sales;
use App\contacts;

class FrontendController extends Controller
{
    public function index(){
        $services = categories::where('devide',1)->limit(4)->get();
        $product_category = categories::where('devide',2)->get();
        $product = products::all();
        $news = news::limit(4)->get();
        return view('Frontend.index',compact('services','product_category','product','news'));
    }
    public function about(){
        $intros = intros::where('status',1)->get();
        return view('Frontend.about',compact('intros'));
    }
    public function sale(){
        $newssale = news_sales::all();
        return view('Frontend.sale',compact('newssale'));
    }
    public function service(){
        $service = products::all();
        $service_category = categories::where('devide',1)->get();
        return view('Frontend.service',compact('service','service_category'));
    }
    public function product(){
        $product = products::paginate(8);
        $product_category = categories::where('devide',2)->get();
        return view('Frontend.product',compact('product','product_category'));
    }
    public function contact(){
        return view('Frontend.contact');
    }
    public function postcontact(Request $request){
        $contact = new contacts();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email_sender = $request->email_sender;
        $contact->subject = $request->subject;
        $contact->content = $request->content;
        $contact->save();
        return redirect()->route('contact');
    }
    public function news(){
        return view('Frontend.news');
    }
    public function userinfo(){
        return view('Frontend.layouts_user.user_info');
    }
    public function postedituserinfo(Request $request){
        $db = users::where('id',Auth::user()->id)->update([
            'name' => $request->name,
            'sex' => $request->sex,
            'cmnd' => $request->cmnd,
            'phone' => $request->phone,
            'address' => $request->address,
        ]);
        return redirect()->route('userinfo');
    }
    public function postavataruserinfo(Request $request){
        
            $fileImage = time().'_'.$request->avatar->getClientOriginalName();
            $request->avatar->move(public_path('sources/img/user'), $fileImage);
            $db = users::where('id',Auth::user()->id)->update([
                'avata' => 'sources/img/user/'.$fileImage,
        ]);
        return redirect()->route('userinfo');
    }
    public function usersecurity(){
        return view('Frontend.layouts_user.user_security');
    }
    public function postusersecurity(Request $request){
        if(Hash::check($request->passold, Auth::user()->password)){
            if($request->repassnew == $request->passnew){
                $update = users::where('id',Auth::user()->id)->update([
                    'password' => bcrypt($request->repassnew)
                ]);
                return redirect()->back();
            }else{
                return redirect()->route('usersecurity');
            }
        }else{
            return redirect()->route('usersecurity');
        }
        // return redirect()->back();
    }
    public function userhistory(){
        return view('Frontend.layouts_user.user_history');
    }

    public function search(Request $request){
        $product = products::where('product_name','LIKE',"%$request->search%")->get();
        return view('Frontend.search',compact('product',));
    }

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\mymodel;
use App\Models\User;
use App\Mail\SendMail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class mycontroller extends Controller
{
    function insert(Request $req){
        $name =$req->get('LName');
        $gen =$req->get('Lgeneration');
        $price =$req->get('Pprice');
        $image = $req->file('image')->getClientOriginalName();
        $req->image->move(public_path('image'),$image);

        $company = new mymodel();
         $company->LName =$name;
         $company->Lgeneration=$gen;
         $company->Pprice =$price;
         $company->PImage = $image;
         $company->save();

         return redirect('insert');
    }

    public function readdata(){
        $pdata = mymodel::all();
        return view('insertRead',['data' => $pdata]);
    }

    public function readUser(){
        $getData = mymodel::all();
        return view('welcome',['app' => $getData]);
    }
    
    function updateordelete(Request $req){
        $id =$req->get('pid');
        $name =$req->get('LName');
        $generation =$req->get('Lgeneration');
        $price =$req->get('Pprice'); 

        if($req->get('update') == 'Update'){
            return view('updateview',['id'=>$id, 'LName'=>$name,'Lgeneration'=>$generation,'Pprice' =>$price]); 
        }
        else{
            $delete = mymodel::find($id);
            $delete->delete();
            return redirect('insert');
        }
    }

    function Update(Request $req){
        $id = $req->get('pid');
        $namee = $req->get('LName');
        $gen = $req->get('Lgeneration');
        $price = $req->get('Pprice');

        $prod = mymodel::find($id);
        $prod->LName = $namee;
        $prod->Lgeneration = $gen;
        $prod->Pprice = $price;
        $prod->save();
        return redirect('insert');

    }
    public function index(){
        return view('login');
    } 
    
    public function adminindex(){
        return view('adminlogin');
    }      

    public function register(){
        return view('register');
    }

    public function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = [
            'email' => $req['email'],
            'password' => $req['password'],
        ];

        if(Auth::attempt($credentials)){
            return redirect('welcome');
        }else{
            return redirect('login')->withErrors('invalid data');
        }
    }
    public function adminLogin(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $credentials = [
            'email' => $req['email'],
            'password' => $req['password'],
        ];
        
        if(Auth::attempt($credentials)){
            return redirect('insert');
        }else{
            return redirect('login')->withErrors('invalid data');
        }
    }
    
    public function registered(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
        ],[
            'name.required' => 'Name field required',
            'email.required' => 'Email field required',
            'email.email' => 'Email must be email',
            'password.required' => 'Password must be required'
        ]);

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=> Hash::make($req->password)
        ]);

        return redirect('login')->withErrors('Error');
    }
    
    // public function logout(){
    //     Session::flush();
    //     Auth::logout();
    //     return redirect('');
    // }
   
    public function welcome(){
        return view('welcome');
    }
    public function admin_login(){
        return view('adminlogin');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

     Mail::to($request->email)->send(new SendMail($data));
     return back()->with('success', 'Thanks for contacting us!');

    }
}
?>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{

    public function register(Request $req){

        $req->validate([
             'firstName'=>'required|max:30',
             'lastName'=>'required|max:30',
             'text'=>'required|min:50|max:2000',
              'email'=>'required|unique:customers',
              'password'=>'required|min:6',
              'img'=>'required|mimes:jpeg,bmp,png,jpg',
              'currency'=>'required'
         ]);
       $data = new Customer();
       $data->firstName = $req->input('firstName');
       $data->lastName = $req->input('lastName');
       $data->text = $req->input('text');
       $data->email = $req->input('email');
       $data->password = $req->input('password');
       $data->price=$req->input('price');
       $data->price_type=$req->input('currency');
       $data->img = $req->file('img')->store('img','public');
       $data->save();
       setcookie('email',$req->input('email') ,time()+86000*30,'/');
       setcookie('type','customer',time()+86000*30,'/');
       return redirect('/executors');
     }
    public function login(Request $req){
        $req->validate([
             'email'=>'required',
             'password'=>'required|min:6'
        ]);

        $user = DB::select('select * from customers where email = :email and password = :password',
         ['email'=>$req->input('email'),'password'=>$req->input('password')]);
        if($user){
            setcookie('email',$req->input('email') ,time()+86000*30,'/');
            setcookie('type','customer',time()+86000*30,'/');
            return redirect('/executors');
        }else{
            return redirect()->route('customer-login')->with('noLogin','такого ползователя нет!(');
        }
    }
}

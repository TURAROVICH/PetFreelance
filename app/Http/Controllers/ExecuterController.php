<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Executor;
use Illuminate\Support\Facades\DB;
class ExecuterController extends Controller
{
    public function register(Request $req){
       $req->validate([
            'firstName'=>'required|max:30',
            'lastName'=>'required|max:30',
            'bio'=>'required|min:50|max:2000',
            'birthday'=>'required',
            'resume'=>'required|mimes:txt,docx',
            'img'=>'required|mimes:jpeg,bmp,png,jpg',
             'email'=>'required|unique:executors',
             'password'=>'required|min:6',
             'github'=>'required',

        ]);
      $data = new Executor();
      $data->firstName = $req->input('firstName');
      $data->lastName = $req->input('lastName');
      $data->bio = $req->input('bio');
      $data->resume = $req->file('resume')->store('resume','public');
      $data->img = $req->file('img')->store('img','public');
      $data->email = $req->input('email');
      $data->password = $req->input('password');
      $data->github = $req->input('github');
      $data->telegram = $req->input('telegram');
      $data->save();
      setcookie('email',$req->input('email') ,time()+86000*30,'/');
      setcookie('type','executer',time()+86000*30,'/');
      return redirect('/vacance');
    }

    public function login(Request $req){
        $req->validate([
             'email'=>'required',
             'password'=>'required|min:6'
        ]);

        $user = DB::select('select * from executors where email = :email and password = :password',
         ['email'=>$req->input('email'),'password'=>$req->input('password')]);
        if($user){
            setcookie('email',$req->input('email') ,time()+86000*30,'/');
            setcookie('type','executer',time()+86000*30,'/');
            return redirect('/vacance');
        }else{
            return redirect()->route('executor-login')->with('noLogin','такого ползователя нет!(');
        }
    }
}

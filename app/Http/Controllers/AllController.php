<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExecutorAction;
use Illuminate\Support\Facades\DB;
class AllController extends Controller
{
    protected $id;
    private $user_id;
   public function executors(){

    $all = DB::select('select * from executors');
    return view('executers',['all'=>$all]);
   }

   public function oneExecuter(Request $req,$name,$id){
    $one = DB::select('select * from executors where id=:id',['id'=>$id]);
    return view('execute',['executor'=>$one]);
   }

   public function customers(Request $req){
    $all = DB::select('select * from customers');
    $email=$_COOKIE['email'];

     $data = DB::select('select id from executors where email = :email',['email'=>$email]);
       return view('customers',['all'=>$all,'id'=>$data]);
   }

   public function oneCustomer(Request $req,$name,$id,$user_id){
    $action = DB::select("SELECT *
    FROM executor_actions
    INNER JOIN executors
    ON executor_actions.user_id = executors.id and executor_actions.user_email = executors.email;");

    $one = DB::select('select * from customers where id=:id and firstName = :name',['id'=>$id,'name'=>$name]);
     $this->id=$user_id;
    $sign_lenght = count($action);
    return view('customer',['executor'=>$one,'id'=>$user_id,'actions'=>$action,'lenght'=>$sign_lenght]);
   }
   public function oneCustomerAction(Request $req){
  
       $data = new ExecutorAction;
       $this->user_id = $req->input('id');
       $data->user_id = $req->input('id');
       $data->user_email =$_COOKIE['email'];
       $data->save();
       
   }

   public function home(){
       $type = $_COOKIE['type'];
       $email=$_COOKIE['email'];
       if($type=='executer'){
        $data = DB::select('select * from executors where email = :email',['email'=>$email]);
        return view('executor-home',['info'=>$data]);
       }else if($type=='customer'){
        $data = DB::select('select * from customers where email = :email',['email'=>$email]);
        return view('customer-home',['info'=>$data]);
       }
       dd($type,$email);


   }
}

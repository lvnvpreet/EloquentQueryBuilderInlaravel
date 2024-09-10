<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;



class UserController extends Controller
{

    function queries(){
        // $responce = User::all();
        // $responce = User::get();
        $responce = User::where('name','Navpreet ')->get();

        // $responce = User::first();
        // $responce = User::find(2);  //this for id 
        // $responce = [$responce];

        // $responce = User::insert([
        //     'name'=>'Manraj',
        //     'email'=>'manraj@test.com',
        //     'mobile'=>'9988776655',
        // ]);
        // if($responce){
        //     return 'Data Inserted!';
        // }else{
        //     return 'Error: data not inserted';
        // }

        // $responce = User::where('name','Lovepreet')->update([
        //     'name'=>'Lovepreet Singh',
        // ]);
        // $responce =User::where('name','Navpreet')->update([
        //     'name'=>'Navpreet Kour',
        // ]);
        
        // $responce = User::where('name','Manraj')->update([
        //     'name'=>'Manraj Singh Dhillon',
        // ]);


        // $responce = User::where('name','Manraj')->delete();
        // if($responce){
        //     return 'Data Deleted!';
        // }else{
        //     return 'Error: data not Deleted';
        // }



        return view('user',['data'=>$responce]);
    }
   
 }

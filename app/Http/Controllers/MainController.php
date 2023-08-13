<?php

namespace App\Http\Controllers;

use App\Models\Main;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('layouts.backend.main');
    }
    public function signup(Request $request){
       if($request->isMethod('post'))
       {
           User::create($request->all());
           return redirect('/dashboard')->with('flash_message_success', 'Signup Successfully');
       }
        return view('layouts.backend.main');

    }
}

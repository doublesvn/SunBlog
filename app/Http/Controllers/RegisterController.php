<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request){
        // return request()->all();
        $validateData = $request->validate([
            'name'=>'required|max:25',
            'username'=> ['required','min:3','max:255','unique:users'],
            'email'=> ['required','email:dns','unique:users'],
            'password' => 'required|min:5|max:255'

        ]);
        // $validateDat['password'] = bycrypt($validateDat['password'] );
        $validateData['password'] = Hash::make($validateData['password'] );

        User::create($validateData);
        // $request -> session()->flash('succes','Registration succesfull');
        return redirect('/login')->with('success','Registration succesfull');
    }
}

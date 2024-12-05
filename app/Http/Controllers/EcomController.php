<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrInterface;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Auth;

class EcomController extends Controller
{
    //
    public function collection()
    {
        return view("collection");
    }

    public function signin()
    {
        return view("sign-in");
    }

    public function signup()
    {
        return view("sign-up");
    }
    public function reg(Request $request)
    {
        $user=new User();
        $user->name=$request->n;
        $user->email=$request->e;
        $user->password=$request->p;
        if($user->save())
        {
            noty()->success('user created.');
            return redirect('/signin');
        }
        else
        {
            noty()->error('User Not Created.');
            return redirect('/signup');
        }
   }

   public function log(Request $request)
   {
        if(Auth::attempt(['email'=>$request->e,'password'=>$request->p]))
        {
            if(Auth::user() && Auth::user()->role == 1)
            {
                noty()->success('Login Scusss as admin.');
            return redirect('/home');
            }
            else if(Auth::user() && Auth::user()->role == 0)
            {
                noty()->success('Login Scusss as user.');
            return redirect('/collection');
            }
        }
        else
        {
            noty()->error('Galat ha sb kuch.');
            return redirect('/signin');
        }
   }

   public function index()
   {
       return view("home");
   }

}

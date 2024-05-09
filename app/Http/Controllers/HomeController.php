<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\RequestQuote;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = User::all();
        return view("home" ,compact("data"));
    }

    public function requestQuote(Request $request)
    {
        $reqQuote = new RequestQuote();
        $reqQuote->service = $request['service'];
        $reqQuote->name = $request['name'];
        $reqQuote->phone = $request['phone'];
        $reqQuote->email = $request['email'];
        $reqQuote->msg = $request['msg'];
        $reqQuote->save();

        return redirect()->back()->with('message', 'Data Saved Successfully thanks contact you soon!');

    }
}


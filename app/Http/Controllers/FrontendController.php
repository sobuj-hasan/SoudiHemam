<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function business_scope(){
        return view('business_scope');
    }
    
    public function contactus(){
        return view('contactus');
    }

    public function features_capabilities(){
        return view('features_capabilities');
    }

    public function ourpartner(){
        return view('our_partner');
    }

    public function qualification_training(){
        return view('qualification_training');
    }

    public function service(){
        return view('services');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $subscribe = Subscribe::where('email', $request->email)->count();
        if ($subscribe != 0) {
            Notify::error('This email address already exists', 'Error');
            return back();
        }
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Subscribe::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Successfully Subscribed our newslatter', 'Congrats, Dear');
        return back();
    }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message Successfully Submited', 'Success');
        return back();
    }


}

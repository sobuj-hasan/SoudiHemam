<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SaveLater;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {

        return view('dashboard.index',);
    }

    public function logout()
    {
        Auth::logout();

        $notification = array(
            'message' => 'Logout!',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }

}

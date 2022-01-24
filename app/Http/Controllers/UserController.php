<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function login()
    {
        return view("auth.login");
    }
    public function loginWithEmail(UserRequest $request)
    {
        if($this->service->isUser($request)){
            return $this->service->redirectDashboard();
        }else{
            return redirect()->back()->withErrors("We couldn't find user.");
        }
    }

    public function logout(){
        // TODO look at it because of SOLID prenciple

        Auth::logout();
        return redirect("/login");
    }
}

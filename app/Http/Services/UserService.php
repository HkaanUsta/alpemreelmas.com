<?php

namespace App\Http\Services;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserService{

    public function isUser(UserRequest $request)
    {
        return Auth::attempt(["email"=>$request->email,"password"=>$request->password]);
    }

    public function redirectDashboard()
    {
        //TODO burayı solid'e uygun mu ona bak.
        if(Auth::user()->is_admin){
            return redirect("/admin/dashboard");
        }else{
            return redirect("/");
        }
    }
}

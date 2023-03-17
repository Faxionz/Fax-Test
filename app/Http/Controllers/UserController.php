<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list (){
        $data = [];
        $data['name'] = "Fax";
        $data['user_list'] = User::get();
        return view('users.list',$data);
    }

    
}

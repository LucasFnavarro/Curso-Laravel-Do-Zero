<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::paginate(15);
        //$users = User::all();
        //dd($users);

        return view("admin.users.index", compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $r = request();
        $name = $r->name;
        $email = $r->email;
        $password = $r->password;

        User::create([
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);

        // dd($name, $email, $password);
    }
}

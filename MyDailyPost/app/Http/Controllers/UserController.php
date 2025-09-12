<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // $r = request();
        // $name = $r->name;
        // $email = $r->password;
        // $password = $r->email;

        // User::create([
        //     "name" => $name,
        //     "email" => $email,
        //     "password" => $password
        // ]);

        // dd($name, $email, $password);
        $users = User::with(['getUserDetail', 'getUserChildren'])->first();

        $users->getUserDetail->getAddress->name;

        foreach ($users->getUserChildren as $child) {
            return $child->name;
        }



        // return response()->json($users[0]);
        return view('details.index', compact('users'));
    }
}

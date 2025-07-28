<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public  function index()
    {
        $data = "Apekshya Ghimire";
        return view('welcome', [
            'username' => $data
        ]);
    }
}

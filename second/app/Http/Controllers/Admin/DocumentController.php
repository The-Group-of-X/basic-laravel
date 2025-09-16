<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DocumentController extends Controller
{
    public function index()
    {
        // dd(Route::currentRouteName());

        return view('admin.documents.index');
    }
}

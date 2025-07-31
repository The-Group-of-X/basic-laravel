<?php

namespace App\Http\Controllers;

use App\Models\Collegue;
use App\Models\Ranjit;

class RanjitController extends Controller
{
    public function ranju()
    {
        $ranju = Ranjit::where('phone', 9844622904)->first();
        $collegue = Collegue::where('phone', '9844622904')->first();
        return view('ranju', ['ranju' => $ranju, 'collegue' => $collegue]);
    }
}

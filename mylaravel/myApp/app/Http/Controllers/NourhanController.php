<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NourhanController extends Controller
{

    public function index(Request $request)
    {
        $name = $request->name;
        $favColor = $request->favColor;
        return view('Nourhan', ['name' => $name, 'favColor' => $favColor]);
    }
}

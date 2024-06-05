<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahmoudController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        $color = $request->color;

        return view('mahmoudView', ['name' => $name,'color'=> $color]);
    }
}

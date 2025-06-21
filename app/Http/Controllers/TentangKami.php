<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKami extends Controller
{
    public function index()
    {
        return view('web.tentangkami');
    }
}

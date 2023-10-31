<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlphaController extends Controller
{
    public function alphabank()
    {
        return view('admin.alphabank');
    }
}

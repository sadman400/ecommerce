<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index (Request $request) {
        return view('admin.index');
    }

    function home (Request $request) {
        return view('home.index');
    }
}

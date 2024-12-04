<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControllerAdmin extends Controller
{
    public function index()
    {
        return view('home-admin', ['title' => 'Home']);
    }
}

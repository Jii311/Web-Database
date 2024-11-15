<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', ['title' => 'Contact', 'nama' => 'Jihad', 'kelas' => '11 PPLG 2', 'linkedin' => 'Jihad_Fadhilah', 'github' => 'Jii311']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function cardType($type = 'simple')
    {
        return view('form', ['type' => $type]);
    }
}

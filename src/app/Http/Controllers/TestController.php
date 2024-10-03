<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function inquiry()
    {
        return view('inquiry');
    }

    public function confirm(Request $request)
    {
        $contacts = $request->all();
        return view('confirm', compact('contacts'));
    }

    public function send()
    {
        return view('send');
    }
}

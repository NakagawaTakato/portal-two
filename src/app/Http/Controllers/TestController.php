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

    public function confirm(ContactRequest $request)
    {
        $contacts = $request->all();
        return view('cofirm', compact('contacts'));
    }

    public function send()
    {
        return view('send');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // montando breandcup
        $listaMigalhas = json_encode([
            ["titulo" => "Home", "url" => route('home')]
        ]);
        // montando breandcup
        return view('home', compact('listaMigalhas'));
    }
}

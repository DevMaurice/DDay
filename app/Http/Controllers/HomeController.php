<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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
        $this->middleware('auth', ['except' => ['showcases', 'about', 'contact']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application cases page.
     *
     * @return Response
     */
    public function showcases()
    { 
        return view('pages.cases');
    }

    /**
     * Show the application Contact page.
     *
     * @return Response
     */
    public function contact()
    { 
        return view('pages.contact');
    }

    /**
     * Show the application About page.
     *
     * @return Response
     */
    public function about()
    { 
        return view('pages.about');
    }

}

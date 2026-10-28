<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LandingPageController extends Controller
{
    public function index(): View
    {
        return view('landing.index');
    }

    public function about(): View
    {
        return view('landing.about');
    }

    public function booking(): View
    {
        return view('landing.booking');
    }

    public function menu(): View
    {
        return view('landing.menu');
    }

    public function service(): View
    {
        return view('landing.service');
    }

    public function team(): View
    {
        return view('landing.team');
    }
}

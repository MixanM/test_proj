<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\View\View;

class ThemeController extends Controller
{
    //по умолчанию будет тема classic
    public function index() :View
    {
        $theme = session('theme', 'classic');
        return view('themes.' . $theme . '.home');
    }

    public function contacts() :View
    {
        $theme = session('theme', 'classic');
        return view('themes.' . $theme . '.contacts');
    }

    public function setTheme() :RedirectResponse
    {
        $theme = request('theme', 'classic');
        session(['theme' => $theme]);
        return redirect()->route('home');
    }
}

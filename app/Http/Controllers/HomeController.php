<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function home()
    {
        return View::make('welcome');
    }

    public function terms()
    {
        return View::make('components.terms');
    }
}

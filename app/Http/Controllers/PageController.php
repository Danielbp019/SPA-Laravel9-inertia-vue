<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;//invocar

class PageController extends Controller
{
    //
    public function dashboard(){
        return Inertia::render('Dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class dashboard extends Controller
{
    public function index(): View
    {
        $title = 'Dashboard';
        return view('dashboard', compact('title'));
    }
}
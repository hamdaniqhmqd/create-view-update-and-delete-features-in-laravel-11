<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DataSelectController extends Controller
{
    public function index(): View
    {
        $title = 'Data Select';
        return view('select', compact('title'));
    }
}
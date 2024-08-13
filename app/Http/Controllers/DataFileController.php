<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DataFileController extends Controller
{
    public function index(): View
    {
        $title = 'Data File';
        return view('file', compact('title'));
    }
}
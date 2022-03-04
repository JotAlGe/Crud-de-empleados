<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    function index()
    {
        $levels = Level::all();
        return view('levels', compact('levels'));
    }
}

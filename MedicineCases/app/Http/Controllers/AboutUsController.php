<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        return view('quienesSomos');
    }
}

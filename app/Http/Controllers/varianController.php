<?php

namespace App\Http\Controllers;
use App\Models\varian;
use Illuminate\Http\Request;

class varianController extends Controller
{
    public function index()
    {
        return view ('varian.index');
    }
}
<?php

namespace App\Http\Controllers;
use App\Models\home;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view ('home.index');
    }
}
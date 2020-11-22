<?php

namespace App\Http\Controllers;
use App\Models\gunny;
use Illuminate\Http\Request;

class gunnyController extends Controller
{
    public function index()
    {
        return view ('gunny.index');
    }
}
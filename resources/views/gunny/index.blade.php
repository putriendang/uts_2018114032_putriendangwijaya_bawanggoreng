@extends('layouts.app')

@section('title','gunny')

@section('content')
    <h1 style="text-align:center;"> Gunny Bunny</h1>
    <img src="{{ url('gb/sling.jpg') }}" widht="250" height="250" alt="sling" >
    <h6> Bunny sling bag</h6>
    <h6> Harga : Rp. 150.000</h6>
    <img src="{{ url('gb/bag.jpg') }}" widht="250" height="250" alt="sling" >
    <h6> Gunny Bag Brown</h6>
    <h6> Harga : Rp. 135.000</h6>
    <img src="{{ url('gb/bunny.jpg') }}" widht="250" height="250" alt="sling" >
    <h6> Bunny Bag Black</h6>
    <h6> Harga : Rp. 100.000</h6>
@endsection
  


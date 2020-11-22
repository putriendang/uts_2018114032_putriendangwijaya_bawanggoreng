@extends('layouts.app')

@section('title', 'produks')

@section('content')

<form action="/produks" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp" value="{{ old('nama')}}">
  @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No Telepon</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="no_tlp" aria-describedby="emailHelp" value="{{ old('no_tlp')}}">
  @error('no_tlp')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="nama" class="form-control" name="alamat" id="exampleInputPassword1" value="{{ old('alamat')}}">
    @error('alamat')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Produk</label>
    <input type="text" class="form-control" name="harga" id="exampleInputPassword1" value="{{ old('harga')}}">
    @error('harga')
    <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
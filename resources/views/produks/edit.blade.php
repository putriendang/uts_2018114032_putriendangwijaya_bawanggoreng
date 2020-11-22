@extends('layouts.app')

@section('title','produks')

@section('content')
<form action="/produks/{{ $produk['id'] }}" method="POST">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp"
    value="{{ old('nama') ? old('nama') : $produk['nama'] }}">
      @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">No telpon</label>
    <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1"
    value="{{ old('no_tlp') ? old('no_tlp') : $produk['no_tlp'] }}">
      @error('no_tlp')
    <div class="alert alert-danger">{{ $messange }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="exampleInputPassword1"
    value="{{ old('alamat') ? old('alamat') : $produk['alamat'] }}">
    @error('alamat')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputPassword1"
    value="{{ old('harga') ? old('harga') : $produk['harga'] }}">
    @error('harga')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection
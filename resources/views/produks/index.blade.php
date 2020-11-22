@extends('layouts.app')

@section('title','produks')

@section('content')
<a href="/produks/create" class="card-link btn-primary">Tambah pesanan</a>
@foreach ($produks as $produk)

<div class="card" style="width: 18rem;">
<img src="{{ url('gambar') }}/{{ $produk['gambar'] }}" class="card-img-top" alt="...">
  <div class="card-body">
  <a href="/produks/{{ $produk['id']}}" class="card-title">{{ $produk['nama'] }}</a>
    <table class="table">
    <tbody>
    <tr>
    <td>No Telepon</td>
    <td> : </td>
    <td>{{ $produk['no_tlp']}}</td>
    </tr>
    <tr>
    <td>Alamat</td>
    <td> : </td>
    <td>{{ $produk['alamat']}}</td>
    </tr>
    <tr>
    <td>Harga</td>
    <td> : </td>
    <td>Rp. {{ $produk['harga']}}</td>
    </tr>
    </tbody>
    </table>
    <a href="/produks/{{$produk['id']}}/edit" class="card-link btn-warning">Edit</a>
    <form action="/produks/{{$produk['id']}}" method="POST">
      @csrf 
      @method('DELETE')
      <button class="card-link btn-danger">Delete</button>
    </form>
  </div>
</div>
@endforeach
<div>
    {{ $produks->links() }}
    </div>
@endsection
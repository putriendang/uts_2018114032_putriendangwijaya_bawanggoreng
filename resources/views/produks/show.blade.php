@extends('layouts.app')

@section('title','details')

@section('content')
<div class="card">
        <div class="card-body">
            <h3>Nama Lengkap : {{ $produk['nama'] }}</h3>
            <h3>No Tlp Pembeli: {{ $produk['no_tlp'] }}</h3>
            <h3>Alamat Pembeli: {{ $produk['alamat']}}</h3>
            <h3>Harga Pembeli: {{ $produk['harga']}}</h3>
     </div>
</div>
@endsection
@extends('layouts.admin')

@section('content')

<h1>Tambah Produk</h1>

<br>

<form action="{{ route('products.store') }}"
method="POST">

@csrf

<label>Nama Produk</label>
<input type="text" name="name">

<br><br>

<label>Harga</label>
<input type="number" name="price">

<br><br>

<label>Stock</label>
<input type="number" name="stock">

<br><br>

<label>Deskripsi</label>
<textarea name="description"></textarea>

<br><br>

<button class="btn">
Simpan
</button>

</form>

@endsection
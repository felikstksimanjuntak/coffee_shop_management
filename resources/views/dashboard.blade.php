@extends('layouts.admin')

@section('content')

<div class="dashboard-header">

    <div>
        <h1>☕ Bean Haven Coffee Shop</h1>
        <p>Dashboard Admin Coffee Shop</p>
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="logout-btn">
            Logout
        </button>
    </form>

</div>

<div class="dashboard-grid">

    <div class="dashboard-card">
        <h3>Total Produk</h3>
        <h1>25</h1>
    </div>

    <div class="dashboard-card">
        <h3>Total Penjualan</h3>
        <h1>120</h1>
    </div>

    <div class="dashboard-card">
        <h3>Pendapatan</h3>
        <h1>Rp 15.000.000</h1>
    </div>

</div>

@endsection
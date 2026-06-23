<!DOCTYPE html>
<html>
<head>

<title>Customer Menu</title>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit"
        style="
        background:#dc3545;
        color:white;
        border:none;
        padding:10px 20px;
        border-radius:8px;
        cursor:pointer;">
        Logout
    </button>
</form>
<style>

body{
background:#f5f1ea;
font-family:'Segoe UI';
}

.container{
width:90%;
margin:auto;
padding:50px;
}

.grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
}

.card{
background:white;
padding:20px;
border-radius:15px;
text-align:center;
}

.btn{
display:inline-block;
background:#6f4e37;
padding:10px 20px;
color:white;
text-decoration:none;
border-radius:10px;
}

</style>

</head>

<body>

<div class="container">

<h1>☕ Menu Coffee Shop</h1>

<p>Selamat datang {{ Auth::user()->name }}</p>

<div class="grid">

<div class="card">
<h2>Espresso</h2>
<p>Rp 15.000</p>
<a href="#" class="btn">Pesan</a>
</div>

<div class="card">
<h2>Latte</h2>
<p>Rp 20.000</p>
<a href="#" class="btn">Pesan</a>
</div>

<div class="card">
<h2>Cappuccino</h2>
<p>Rp 22.000</p>
<a href="#" class="btn">Pesan</a>
</div>

<div class="card">
<h2>Americano</h2>
<p>Rp 18.000</p>
<a href="#" class="btn">Pesan</a>
</div>

</div>

</div>

</body>
</html>
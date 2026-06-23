<!DOCTYPE html>
<html>
<head>

<title>Customer Menu</title>

<style>

body{
font-family:Segoe UI;
background:#f5f1ea;
padding:40px;
}

.card{
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 0 10px rgba(0,0,0,.1);
}

.menu{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:20px;
margin-top:30px;
}

.item{
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.1);
text-align:center;
}

button{
background:#4e342e;
color:white;
border:none;
padding:10px 20px;
border-radius:8px;
cursor:pointer;
}

</style>

</head>

<body>

<div class="card">

<h1>☕ Menu Coffee Shop</h1>

<p>Selamat datang {{ Auth::user()->name }}</p>

<div class="menu">

<div class="item">
<h3>Espresso</h3>
<p>Rp 15.000</p>
<button>Pesan</button>
</div>

<div class="item">
<h3>Latte</h3>
<p>Rp 20.000</p>
<button>Pesan</button>
</div>

<div class="item">
<h3>Cappuccino</h3>
<p>Rp 22.000</p>
<button>Pesan</button>
</div>

<div class="item">
<h3>Americano</h3>
<p>Rp 18.000</p>
<button>Pesan</button>
</div>

</div>

</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>

<title>Admin Coffee Shop</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI';
}

body{
background:#f5f1ea;
}

.sidebar{
position:fixed;
left:0;
top:0;
width:250px;
height:100vh;
background:#4e342e;
color:white;
}

.logo{
padding:25px;
text-align:center;
font-size:24px;
font-weight:bold;
border-bottom:1px solid rgba(255,255,255,.2);
}

.sidebar a{
display:block;
padding:15px 25px;
color:white;
text-decoration:none;
}

.sidebar a:hover{
background:#6d4c41;
}

.main{
margin-left:250px;
}

.navbar{
background:white;
height:70px;
display:flex;
justify-content:space-between;
align-items:center;
padding:0 30px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.content{
padding:30px;
}

.card{
background:white;
padding:20px;
border-radius:15px;
box-shadow:0 2px 10px rgba(0,0,0,.1);
}

.logout-btn{
    background:#dc3545;
    color:white;
    border:none;
    padding:10px 15px;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

.logout-btn:hover{
    background:#b02a37;
}

</style>

</head>

<body>

<div class="sidebar">

<div class="logo">
☕ Coffee Shop
</div>

<a href="{{ route('dashboard') }}">
Dashboard
</a>

<a href="{{ route('products.index') }}">
Produk
</a>

<a href="{{ route('sales.index') }}">
Penjualan
</a>

<a href="{{ route('profile.edit') }}">
Profile
</a>

<form method="POST" action="{{ route('logout') }}">
@csrf
<button style="width:100%;padding:15px;background:#8b0000;color:white;border:none">
Logout
</button>
</form>

</div>

<div style="display:flex;align-items:center;gap:15px">

    <span>{{ Auth::user()->name }}</span>

    <form action="{{ route('logout') }}" method="POST">
        @csrf

        <button type="submit" class="logout-btn">
            Logout
        </button>
    </form>

</div>

<h3>Admin Panel</h3>

<div>
{{ Auth::user()->name }}
</div>

</div>

<div class="content">
@yield('content')
</div>

</div>

</body>
</html>
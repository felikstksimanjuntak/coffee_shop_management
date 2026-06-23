<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Customer Menu</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    background:#f5f1ea;
}

.container{
    width:90%;
    margin:40px auto;
    background:white;
    border-radius:20px;
    padding:40px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
}

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:40px;
}

.logout-btn{
    background:#dc3545;
    color:white;
    border:none;
    padding:12px 20px;
    border-radius:10px;
    cursor:pointer;
}

.logout-btn:hover{
    background:#b02a37;
}

.menu-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.card{
    background:#fff;
    border-radius:15px;
    padding:25px;
    text-align:center;
    box-shadow:0 3px 10px rgba(0,0,0,.08);
}

.card img{
    width:100%;
    height:180px;
    object-fit:cover;
    border-radius:10px;
}

.card h3{
    margin-top:15px;
}

.price{
    color:#4e342e;
    font-weight:bold;
    margin:10px 0;
}

.btn{
    background:#4e342e;
    color:white;
    border:none;
    padding:10px 20px;
    border-radius:10px;
    cursor:pointer;
}

</style>
</head>
<body>

<div class="container">

    <div class="topbar">

        <h1>☕ Coffee Shop Menu</h1>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="logout-btn">
                Logout
            </button>
        </form>

    </div>

    <h3>
        Selamat datang, {{ Auth::user()->name }}
    </h3>

    <br><br>

    <div class="menu-grid">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1510707577719-ae7c14805e3a" alt="">
            <h3>Espresso</h3>
            <p class="price">Rp 15.000</p>
            <button class="btn">Pesan</button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085" alt="">
            <h3>Latte</h3>
            <p class="price">Rp 20.000</p>
            <button class="btn">Pesan</button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" alt="">
            <h3>Cappuccino</h3>
            <p class="price">Rp 22.000</p>
            <button class="btn">Pesan</button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1447933601403-0c6688de566e" alt="">
            <h3>Americano</h3>
            <p class="price">Rp 18.000</p>
            <button class="btn">Pesan</button>
        </div>

    </div>

</div>

</body>
</html>
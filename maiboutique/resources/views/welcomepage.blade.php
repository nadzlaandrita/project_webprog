<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/app.css">

    <title>
        @yield('welcome')
    </title>
</head>
<body>

    <!-- As a link -->
    <header>
        <nav class="navbar navbar-light bg-light">
            <a class="px-3 navbar-brand" href="/" style="color:blue" >MAIBOUTIQUE</a>
            <a class="px-3 navbar-text" href="/login" style="color:blue">Sign In</a>
        </nav>
    </header>

    <div class="text-center">
        <img src="{{asset("image/boutique.png")}}" class="mt-3" style="width: 90rem; height: 30rem; filter:brightness(50%)" alt="Responsive image">
        <div class="centered" style="color: aliceblue; position: absolute; top: 15rem; left: 25rem;">
            <h1>Welcome To 
                <a href="/" style="color: aliceblue">MAIBOUTIQUE</a>
            </h1>
            <p>Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</p>

            <button type="button" class="btn btn-primary btn-lg">
                <a href="/register" style="color:aliceblue;">SIGN UP NOW</a>
            </button>
        </div>
    </div>
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

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

    <div class="contain-welcome">
        <img src="{{asset("image/boutique.png")}}" class="mt-3" alt="Responsive image">
    </div>

    <div class="isi-contain-welcome">
           <h1>Welcome To <a href="/" >  MAIBOUTIQUE</a></h1>
           <p>Online Boutique that Provides You with Various Clothes to Suit Your Various Activities</p>
           <button type="buttosn" class="btn btn-primary btn-lg">
            <a href="/register">SIGN UP NOW</a>
        </button>
    </div>



<style>
    .contain-welcome{
        position: relative;
    }

    .contain-welcome img{
        width: 100%;
        height: 35rem;
        filter:brightness(50%);
    }

    .isi-contain-welcome h1{
        position: absolute;
        text-align: center;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff

    }
    .isi-contain-welcome p{
        position: absolute;
        text-align: center;
        top: 46%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff

    }
    .isi-contain-welcome button{
        position: absolute;
        text-align: center;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff;

    }
    .isi-contain-welcome button a{
        text-decoration-color: #ffffff
    }

    .isi-contain-welcome a{
        text-decoration-color: #1e8bde;
        color: #ffffff
    }

    @media only screen and (max-width: 1300px) {
    .isi-contain-welcome h1{
        position: absolute;
        text-align: center;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff

    }
    .isi-contain-welcome p{
        position: absolute;
        text-align: center;
        top: 43%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff

    }
    .isi-contain-welcome button{
        position: absolute;
        text-align: center;
        top: 55%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffffff;
        text-decoration-color: white;

    }

}
</style>

</body>
</html>

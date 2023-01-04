<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>
        @yield('navbar_admin')
    </title>

</head>
<body>

  <nav class="px-3 navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/home-admin">MAIBOUTIQUE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="/home-admin">Home</a>
        <a class="nav-item nav-link" href="#">Search</a>
        <a class="nav-item nav-link" href="/profile-admin">Profile</a>
      </div>
    </div>

    <form class="form-inline">
      <a class="btn btn-outline-success" type="button" href="/add-item">Add Item</a>
      <button class="btn btn-outline-success" type="button">Sign Out</button>
    </form>

  </nav>

  <main>
    @yield('content')
  </main>
    
</body>
</html>
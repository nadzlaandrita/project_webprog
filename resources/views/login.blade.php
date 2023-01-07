<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>
        @yield('login')
    </title>

</head>
<body>
    
    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Sign In</h1>

                <form method="POST" action={{ url('/login')}}>
                    @csrf

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name ="email" class="form-control" id="email" placeholder="Enter email" value="{{ Cookie::get('email_cookie') != null ? Cookie::get('email_cookie') : '' }} " required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password"class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember" value="{{ Cookie::get('password_cookie') != null ? Cookie::get('password_cookie') : '' }}">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>

                    <div class="text-center">

                        <input type="submit" value="Sign In" class="btn btn-primary">
                        <p>Not Registered yet?
                            <a href="/register">Sign Up Here</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    


</body>
</html>
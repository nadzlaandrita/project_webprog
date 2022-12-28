<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>
        @yield('register')
    </title>

</head>
<body>
    
    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Sign Up</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="(5-20 letters)">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <input type="phoneNumber" class="form-control" id="exampleInputPhoneNumber" placeholder="(10-13 numbers)">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                        <input type="address" class="form-control" id="exampleInputAddress" placeholder="(min 5 letters)">
                    </div>

                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <p>Alredy Register?
                            <a href="/login">Sign In Here</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    


</body>
</html>
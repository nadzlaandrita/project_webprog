@extends('navbar_member')

@section('title', 'update_profile')

@section('content')

    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Update Profile</h1>

                <form action="/update-profile">
                    
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="(5-20 letters)" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <input type="phoneNumber" class="form-control" id="exampleInputPhoneNumber" placeholder="(10-13 numbers)" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                        <input type="address" class="form-control" id="exampleInputAddress" placeholder="(min 5 letters)" required>
                    </div>

                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-primary">Save Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection
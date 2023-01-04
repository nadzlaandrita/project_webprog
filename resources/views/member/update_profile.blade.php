@extends('member.navbar_member')

@section('title', 'update_profile')

@section('content')

    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Update Profile</h1>

                <form>

                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="(5-20 letters)" required autofocus>
                        
                        @error('username')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required autofocus>
                        @error('email')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <input type="phone_number" class="form-control" id="phone_number" placeholder="(10-13 numbers)" required>
                        @error('phone_number')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                        <input type="address" class="form-control" id="address" placeholder="(min 5 letters)" required>
                        @error('address')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-success form-control">Save Update</button>
                    </div>

                    <div>
                        <a type="button" class="mt-2 btn btn-outline-danger" href="/profile-member">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
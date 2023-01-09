@extends('member.navbar_member')

@section('title', 'update_profile')

@section('content')

    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Update Profile</h1>

                <form method="POST" action="{{ url('/update-profile') }}">
                    @method('PATCH')
                    @csrf
                    
                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="text" name="username" class="form-control" id="email" aria-describedby="emailHelp" placeholder="(5-20 letters)" value="{{ $user_data->username }}" required autofocus>
                        
                        @error('username')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ $user_data->email }}" required autofocus>
                        @error('email')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="(10-13 numbers)" value="{{ $user_data->phone_number }}" required>
                        @error('phone_number')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="(min 5 letters)" value="{{ $user_data->address }}" required>
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
                        <a type="button" class="mt-2 btn btn-outline-danger" href="/profile">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
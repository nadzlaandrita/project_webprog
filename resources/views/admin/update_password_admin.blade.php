@extends('admin.navbar_admin')

@section('title', 'update_password_admin')
    
@section('content')

    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Update Password</h1>

                @foreach ($user as $user)
                <form method="POST" action="/deleteProduct/{{ $user->id }}">
                    @csrf

                    <div class="form-group">
                        <label for="old_password">Old Password</label>
                        <input type="username" class="form-control" id="old_password" aria-describedby="old_password" placeholder="(5-20 letters)" required autofocus>
                        
                        @error('old_password')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input value="{{$user->password}}" type="new_password" class="form-control" id="new_password" aria-describedby="new_password" placeholder="(5-20 letters)" required autofocus>
                        @error('new_password')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="text-center mt-2">
                        <button type="submit" class="btn btn-success form-control">Save Update</button>
                    </div>

                    <div>
                        <a type="button" class="mt-2 btn btn-outline-danger" href="/profile-admin">Back</a>
                    </div>
                </form>

                @endforeach
            </div>
        </div>
    </div>

@endsection
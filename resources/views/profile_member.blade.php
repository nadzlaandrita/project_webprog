@extends('navbar_member')

@section('title', 'profile_member')

@section('content')

    <div class="mx-5 mt-5 card d-flex" style="justify-content: center; align-items:center">
        <div class="card-body text-center">
            <h1>My Profile</h1>
            <div class="btn text-white bg-secondary">Member</div>
            <h4>Username: </h3>
            <p>Email</p>
            <p>Address: </p>
            <p>Phone: </p>
            
            <div>
                <a href="/update-profile" class="btn btn-primary">Edit Profile</a>
                <a href="#" class="btn btn-primary bg-light" style="color: blue">Edit Password</a>
            </div>
            

        </div>
    </div>

@endsection
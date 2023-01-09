@extends('member.navbar_member')

@section('title', 'profile_member')

@section('content')


    

    <div class="mx-5 mt-5 card d-flex" style="justify-content: center; align-items:center">
        <div class="card-body text-center">
            <h1>My Profile</h1>

            @foreach ($user_data as $data)

                <div class="btn text-white bg-secondary">{{$data->role}}</div>
                <h4>Username: {{$data->username}}</h3>
                <p>{{$data->email}}</p>
                <p>Address: {{$data->address}}</p>
                <p>Phone: {{$data->phone_number}}</p>

            @endforeach

            <div>
                <a href="/update-profile" class="btn btn-primary">Edit Profile</a>
                <a href="/update-password" class="btn btn-primary bg-light" style="color: blue">Edit Password</a>
            </div>

        </div>
    </div>




@endsection
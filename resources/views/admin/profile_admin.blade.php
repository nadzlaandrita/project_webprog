@extends('admin.navbar_admin')

@section('title', 'profile_admin')
    
@section('content')
    <div class="mx-5 mt-5 card d-flex" style="justify-content: center; align-items:center">
        <div class="card-body text-center">
            <h1>My Profile</h1>
            
            @foreach($user_data as $user_data)

                <div class="btn text-white bg-secondary">{{$user_data->role}}</div>
                <h4>Username: {{$user_data->username}} </h3>
                <p>{{$user_data->email}}</p>
                <p>Address: {{$user_data->address}}</p>
                <p>Phone: {{$user_data->phone_number}}</p>

            @endforeach

            <div>
                <a href="/update-password" class="btn btn-primary bg-light" style="color: blue">Edit Password</a>
            </div>
            

        </div>
    </div>
@endsection


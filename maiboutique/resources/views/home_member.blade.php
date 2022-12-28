@extends('navbar_member')

@section('title', 'home_member')

@section('content')
    
    <div class="container"> 

        <div class="row justify-content-center"> 
        
            @foreach ($product_data as $item)
                
                <div class="col">
                    <div class="card h-100 text-center mb-3">
                    <div class="mt-2">
                        <img src="{{ asset('image/'.$item->image) }}" class="card-img-top size-img" alt="{{$item->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="card-text">Rp. {{$item->price}}</p>
                        </div>
                    </div>
                    <a href="/" class="btn btn-primary">More Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>



@endsection
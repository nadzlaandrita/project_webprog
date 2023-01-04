@extends('admin.navbar_admin')

@section('title', 'home_admin')

@section('content')
    
    <div class="container"> 

        <div class="row row-cols-2 row-cols-md-4 g-4 m-2"> 
        
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
                    <a href="/home-admin/detail-product-{{$item->id}}" class="btn btn-primary">More Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>

    <div class="d-flex justify-content-center">
        {!! $product_data->links() !!}
    </div>

@endsection
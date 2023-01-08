@extends('admin.navbar_admin')

@section('title', 'home_admin')

@section('content')
    
    <div class="card-group mt-3" style="height: 800px; width: 1200px;"> 

        <div class="d-flex row row-cols-2 row-cols-md-4 g-3 m-2"> 
        
            @foreach ($product_data as $item)
                
                <div class="col">
                    <div class="card mb-3" style="height: 320px;">
                    <div class="">
                        <img src="{{ url($item->image) }}" class="card-img-top size-img" alt="{{$item->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <p class="card-text">Rp. {{$item->price}}</p>
                        </div>
                    </div>
                    
                    <div>
                        <a href="/home-admin/detail-product-{{$item->id}}" class="btn btn-primary">More Detail</a>
                    </div>
                    </div>
                </div>
            @endforeach
        </div>
        
    </div>

    <div class="d-flex justify-content-center">
        {!! $product_data->links() !!}
    </div>

@endsection
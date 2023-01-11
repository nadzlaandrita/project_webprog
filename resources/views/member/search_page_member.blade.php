@extends('member.navbar_member')

@section('title', 'search_page_member')


@section('content')
<br>
<h1 class="d-flex justify-content-center"> Search Your Favorite Clothes</h1>
<br>
<form class="d-flex justify-content-center" action="{{ url('/search') }}">
    <input class="form-control
     me-2 w-75 " type="search" placeholder="Search" aria-label="Search"
        name="search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

    {{-- < class="row row-cols-1 row-cols-md-4 g-4 m-2"> --}}
        {{-- SHOW PRODUCT --}}

        <br>
        <div class="card-group mt-3" style="height: 800px; width: 1200px; ">
            <div class="d-flex row row-cols-2 row-cols-md-4 g-3 m-2">
                 @foreach ($products as $product)

                 <div class="col">
                    <div class="card mb-3" style="height: 320px;">
                    <div class="">
                        <img src="{{ url($product->image) }}" class="card-img-top size-img" alt="{{$product->image}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">Rp. {{$product->price}}</p>
                        </div>
                    </div>

                    <div>
                        <a href="/home/detail-product-{{$product->id}}" class="btn btn-primary">More Detail</a>
                    </div>
                    </div>
                </div>
        @endforeach
        </div>
        </div>
        <div class="m-5 d-flex justify-content-center">
            {{-- PAGINATION NAVIGATION --}}
            {{$products->withQueryString()->links() }}
        </div>

        <style>
            .card-group{
                margin-left: 14%
            }
            .btn{
                margin-left: 5px;
            }

        </style>

@endsection




@extends('admin.navbar_admin')

@section('title', 'search_page_admin')


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

        @foreach ($products as $product)


            <div class="card d-flex m-5 w-25">
                <img class="card-img-top w-10" src="{{ url($product->image) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{$product->price}}</p>
                  <a href="/home-member/detail-product-{{$product->id}}" class="btn btn-primary">More Details</a>
                </div>
            </div>
        @endforeach

        <div class="m-5 d-flex justify-content-center">
            {{-- PAGINATION NAVIGATION --}}
            {{$products->withQueryString()->links() }}
        </div>
@endsection


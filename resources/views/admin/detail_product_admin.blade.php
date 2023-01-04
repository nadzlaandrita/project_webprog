@extends('admin.navbar_admin')

@section('title', 'detail_product_admin')
    
@section('content')
    
    @foreach ($detail_product_data as $item)

        <div class="container">
            <div class="gambarbaju">
                <img src="{{ asset('image/'.$item->image) }}" alt="img" />
            </div>

            <div class="deskripsi .bg-light">
                <h2><b>{{$item->name}}</b></h2>
                <h3><b>Rp. {{$item->price}}</b></h3>
                <div class="border-tambahan1"></div>
                <h4>Product Detail</h4>
                <h6>Size: {{$item->size}}</h6>
                <h4>Quantity: {{$item->qty}}</h4>
                <div class="border-tambahan2"></div>
                

                <form>

                    <a type="button d-flex" class="mt-3 btn btn-danger btnchart" href="/home-admin"> Back </a>
                    <a type="button d-flex" class="mt-3 btn btn-danger btnchart" href="#"> Delete Item </a>
                    
                </form>
            </div>
        </div>

    @endforeach

@endsection
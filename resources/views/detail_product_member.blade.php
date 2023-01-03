@extends('navbar_member')

@section('title', 'detail_product_member')

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
            <div class="border-tambahan2"></div>
            <h4>Quantity: {{$item->qty}}</h4>

            <form>
                <div class="form-group d-flex">
                <input
                    type="number"
                    id="Quantity"
                    class="form-control"
                    placeholder="Quantity"
                    min="1"
                />
                <button type="button d-flex" class="btn btn-success btnchart">
                    Add To cart
                </button>
                </div>
                <button type="button" class="btn btn-danger">
                    <a href="/home-member">Back</a>
                </button>
            </form>
            </div>
        </div>

    @endforeach

@endsection
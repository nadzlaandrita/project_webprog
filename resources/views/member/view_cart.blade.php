@extends('member.navbar_member')

@section('title', 'view_cart_member')

@section('content')

  <div class="my-chart d-flex justify-content-center">
    <h1>My Cart</h1>
  </div>

  <div class="view-price d-flex justify-content-end m-3">
    <h5>Total Price: {{$total_price}}</h5>

    <form action="/history" method="POST">
      @csrf
      <button type="submit" class="btn btn-primary">checkout</button>
    </form>
    
  </div>

    @foreach($cart_data as $item)
      <div class="card m-3" style="width: 18rem">
        <img class="card-img-top" src="{{ url($item->product->image)}}" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">{{$item->product->name}}</h5>
          <p class="card-text">Rp. {{$item->product->price}}</p>
          <p class="card-text">Qty: {{$item->qty_cart}}</p>

          <a href="/edit-cart/{{$item->product_id}}" class="btn btn-primary">Edit Cart</a>

          <form action="/remove-cart/{{$item->product_id}}" method="POST">
            
            @method('DELETE')
            @csrf

            <button type="submit" class="btn btn-danger btnchart d-flex">
              Remove from Cart
          </button>
          </form>
          
        </div>
      </div>
    @endforeach

  <style>
    h5 {
      margin-right: 15px;
      margin-top: 1%;
    }
    .btn{
        padding-left: 5px;
        align-items:
    }
  </style>
@endsection

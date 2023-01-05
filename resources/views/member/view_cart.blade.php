@extends('member.navbar_member')

@section('title', 'view_cart_member')

@section('content')

 <div class="my-chart d-flex justify-content-center">
    <h1>My Cart</h1>
  </div>


  <div class="view-price d-flex justify-content-end m-3">
    <h5>Total Price:40,000</h5>
    <button type="button" class="btn btn-primary">checkout</button>
  </div>


    <div class="card m-3" style="width: 18rem">
      <img class="card-img-top" src="" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">Price</p>
        <p class="card-text">Qty</p>
        <a href="#" class="btn btn-primary">Edit Chart</a>
        <a href="#" class="btn btn-danger mb-2">Remove from cart</a>
      </div>
    </div>

  </div>

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

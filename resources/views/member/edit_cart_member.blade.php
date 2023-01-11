@extends('member.navbar_member')

@section('title', 'edit_cart_member')

@section('content')

@foreach($item as $item)
  <div class="container">
      <div class="gambarbaju">
        <img src="{{ url($item->product->image) }}" alt="jaket" />
      </div>

      <div class="deskripsi .bg-light">
        <h2><b>{{$item->product->name}}</b></h2>
        <h3><b>Rp. {{$item->product->price}}</b></h3>
        <div class="border-tambahan1"></div>
        <h4>Product Detail</h4>
        <h6>Size: {{$item->product->size}}</h6>
        <div class="border-tambahan2"></div>
        <h4>Quantity: {{$item->product->qty}}</h4>

        <form action="/edit-cart/{{$item->product_id}}" method="POST">
          @method('PATCH')
          @csrf

          <div class="form-group d-flex">
            <input
              type="number"
              name="inputQuantity"
              id="Quantity"
              class="form-control"
              placeholder="Quantity"
              min="1"
            />
            <button type="submit" class="btn btn-success btnchart">
              Update Cart
            </button>
          </div>
          <button type="button" class="btn btn-danger">Back</button>
        </form>

      </div>
  </div>
@endforeach

  <style>
    .container {
      border: solid rgb(227, 223, 223);
      border-width: 0.15px;
      border-radius: 10px;
      display: flex;
      width: 900px;
      height: 400px;
      margin: 90px auto;
      background-color: #f8f9fb;
    }
    .gambarbaju {
      width: auto;
      height: 300px;
      margin: 30px 30px;
      border: solid rgb(227, 223, 223);
      border-width: 0.1px;
      border-radius: 10px;
    }
    .gambarbaju img {
      width: 300px;
      height: 300px;
      padding: 20px 20px;
    }

    h4 {
      margin: 10px 0px;
    }
    .deskripsi {
      width: 1100px;
      margin: 30px 30px;
      border: solid rgb(227, 223, 223);
      border-width: 0.1px;
      border-radius: 10px;
      padding: 20px 20px;
    }
    .border-tambahan1 {
      background-color: rgb(227, 223, 223);
      height: 1px;
    }

    .border-tambahan2 {
      background-color: rgb(149, 144, 144);
      height: 5px;
    }

    .form-control {
      width: 200px;
      height: 40px;
      margin-right: 10px;
    }

    .btnchart {
      width: 150px;
      height: 40px;
    }

    .btn-danger {
      margin-top: 10px;
      width: 150px;
      height: 40px;
    }
  </style>

@endsection









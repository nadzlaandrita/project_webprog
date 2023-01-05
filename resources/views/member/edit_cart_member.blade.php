@extends('member.navbar_member')

@section('title', 'edit_cart_member')

@section('content')

<div class="container">
    <div class="gambarbaju">
      <img src="baju1.jpg" alt="jaket" />
    </div>

    <div class="deskripsi .bg-light">
      <h2><b>Red Jacket</b></h2>
      <h3><b>Rp.10.000</b></h3>
      <div class="border-tambahan1"></div>
      <h4>Product Detail</h4>
      <h6>suitable for kids size: M</h6>
      <div class="border-tambahan2"></div>
      <h4>Quantity</h4>

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
            Update Cart
          </button>
        </div>
        <button type="button" class="btn btn-danger">Back</button>
      </form>
    </div>
  </div>

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









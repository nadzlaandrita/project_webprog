@extends('member.navbar_member')

@section('title', 'transaction_history')

@section('content')

  <div class="title-halaman d-flex justify-content-center">
    <h1>Check What You've Bought</h1>
  </div>
    <br>

  @foreach ($transaction_data as $data)

    <div class="isi-transaksi bg-light ">
      <h5>{{$data->transactionProduct->created_at}}</h5>
      <ul>
        <li> {{$data->transactionProduct->qty}} {{$data->product->name}} </li>
      </ul>
      <h5>Rp {{$total_price = $data->product->price * $data->transactionProduct->qty;}}</h5>
    </div>
  @endforeach
    
  
  <style>
    .isi-transaksi{
      margin-left: 30px;
      margin-bottom: 30px;
    }
  </style>

@endsection

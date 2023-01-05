@extends('member.navbar_member')

@section('title', 'transaction-history')

@section('content')

<div class="title-halaman d-flex justify-content-center">
    <h1>Check What You've Bought</h1>
  </div>
  <br>

  @foreach ($transactions as $data)
  <div class="isi-transaksi bg-light ">
    <h5>{{$data->transaction_date}}</h5>
    <ul>
      <li>{{$data->qty}} pcs //kurang productname </li>
    </ul>
    <h5>Rp {{$data->total_price }}</h5>
  </div>
  @endforeach



  <style>
    .isi-transaksi{
      margin-left: 30px;
      margin-bottom: 30px;
    }
  </style>

@endsection

@extends('member.navbar_member')

@section('title', 'transaction_history')

@section('content')

  <div class="title-halaman d-flex justify-content-center">
    <h1>Check What You've Bought</h1>
  </div>
    <br>

  {{-- @dd($transaction_data) --}}

  @foreach ($transaction_data as $data)

    <div class="isi-transaksi bg-light ">
      <h5>{{$data->created_at}}</h5>
      <ul>
        {{-- @dd($data->transaction_product->product) --}}
        {{-- @dump($data->transaction_product) --}}
        @foreach($data->transaction_product as $data_tp)
          {{-- @dump($data->transaction_product) --}}
          <li>  {{$data_tp->qty}} {{$data_tp->product->name}} Rp. {{$data_tp->sub_price}}</li>
        @endforeach
      </ul>
      <h5>Total Price {{$data->total_price}}</h5>
    </div>
  @endforeach
    
  
  <style>
    .isi-transaksi{
      margin-left: 30px;
      margin-bottom: 30px;
    }
  </style>

@endsection

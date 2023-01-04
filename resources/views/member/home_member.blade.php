@extends('member.navbar_member')

@section('title', 'home_member')

@section('content')
    
  <div class="container"> 

      <div class="row row-cols-2 row-cols-md-4 g-4 m-2"> 
      
          @foreach ($product_data as $item)
              
              <div class="col">
                  <div class="card h-100 text-center mb-3">
                  <div class="mt-2">
                      <img src="{{ asset('image/'.$item->image) }}" class="card-img-top size-img" alt="{{$item->name}}">
                      <div class="card-body">
                          <h5 class="card-title">{{$item->name}}</h5>
                          <p class="card-text">Rp. {{$item->price}}</p>
                      </div>
                  </div>
                  <a href="/home-member/detail-product-{{$item->id}}" class="btn btn-primary">More Detail</a>
                  </div>
              </div>
          @endforeach
      </div>
      
  </div>

  <div class="d-flex justify-content-center">
      {!! $product_data->links() !!}
  </div>

    {{-- <div class="p-5 d-flex" style="position: relative">
        {{-- PAGINATION NAVIGATION --}}
        {{-- {{$product_data->withQuerySring()->links()}} --}}

    {{-- </div> --}}

    {{-- <div>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="{{$product_data->links()}}" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="{{$product_data->links()}}">1</a></li>
              <li class="page-item"><a class="page-link" href="">2</a></li>
              <li class="page-item"><a class="page-link" href="">3</a></li>
              <li class="page-item">
                <a class="page-link" href="" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
          
    </div> --}}
    


@endsection
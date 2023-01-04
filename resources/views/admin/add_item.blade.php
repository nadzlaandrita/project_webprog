@extends('admin.navbar_admin')

@section('title', 'add_item')
    
@section('content')
    
    <div class="mt-5" style="justify-content:center; align-items:center; display:flex;">
        <div class="card w-50" style="background-color:aliceblue">
            <div class="card-body">
                <h1 class="text-center">Add Item</h1>

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{$message}}</strong>
                </div>

                <img src="{{ asset('image/'.Session::get('image')) }}" />

            @endif
                <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="file" class="form-control" name="image" />

                    <button type="submit" class="btn btn-sm">Upload</button>

                    <div class="form-group">
                        <label for="old_password">Clothes Name</label>
                        <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="(5-20 letters)" required autofocus>
                        
                        @error('name')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="size">Clothes Desc</label>
                        <input type="size" class="form-control" id="size" aria-describedby="size" placeholder="(5-20 letters)" required autofocus>
                        @error('size')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="price">Clothes Price</label>
                        <input type="price" class="form-control" id="price" aria-describedby="price" placeholder=">=1000" required autofocus>
                        @error('price')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="quantity">Clothes Stock</label>
                        <input type="quantity" class="form-control" id="quantity" aria-describedby="quantity" placeholder=">=1" required autofocus>
                        @error('quantity')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <button type="button d-flex" class="mt-3 btn btn-outline-danger btnchart">
                        Add
                    </button>

                </form>
            </div>
        </div>
    </div>

@endsection
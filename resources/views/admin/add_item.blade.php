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
                <form method="POST" action="{{ url('/add-item') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <input type="file" class="form-control" name="image" />

                    <button type="submit" class="btn btn-sm">Upload</button>

                    <div class="form-group">
                        <label for="inputName">Clothes Name</label>
                        <input type="inputName" name="name"class="form-control" id="inputName" aria-describedby="inputName" placeholder="(5-20 letters)" required autofocus>
                        
                        @error('name')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="inputSize">Clothes Desc</label>
                        <input type="inputSize" name="size" class="form-control" id="inputSize" aria-describedby="inputSize" placeholder="(5-20 letters)" required autofocus>
                        @error('size')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputPrice">Clothes Price</label>
                        <input type="inputPrice" name="price" class="form-control" id="inputPrice" aria-describedby="inputPrice" placeholder=">=1000" required autofocus>
                        @error('price')
                            <div class="alert alert-dismissible alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="inputStock">Clothes Stock</label>
                        <input type="inputStock" name="qty" class="form-control" id="inputStock" aria-describedby="inputStock" placeholder=">=1" required autofocus>
                        @error('qty')
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
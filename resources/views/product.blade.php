@extends('layshop.layout')
@section('content')
<div class="container">
    <div class="row">
        <p class="  fs-2 fw-bold pt-5 ps-5">Shop With Us </p>
        <p class="opacity-50 fs-5 ps-5 pb-3"> Handpicked Favourites just for you</p>

        @foreach ($product as $item)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card border-opacity-10 mx-auto border-white bg-body-tertiary">
                    <img src="{{ asset('images/' . $item->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text text-center fw-bold"> {{ $item->product_name }} </p>
                        <p class="text-secondary text-center"> <span
                                class="fw-bold text-danger opacity-1">{{$item->price}}</span></p>
                        <form action="{{ route('add.to.cart') }}" class="text-center mb-3" method="POST">
                            @csrf
                            <input type="hidden" name="name" value="{{$item->product_name}}">
                            <input type="hidden" name="price" value="{{ $item->price }}">
                            <input type="hidden" name="image" value="{{ $item->image }}">
                            <button type="submit" class="btn btn-primary text-center">Add to Cart</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
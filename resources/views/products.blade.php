@extends('layouts.main')

@section('title', $title )
@section('description', $description )

@section('container')
    <h1 class="mx-5 my-5">LLSIF Cards:</h1>
    <div class="container-fluid row d-flex flex-wrap justify-content-center" style="padding: 10px 70px;">
        @foreach ($products as $product)

                <div class="card mx-5 my-3" style="width: 22rem;">
                    <img src="/images/{{ $product['image'] . '.png'}}" class="card-img-top" alt="failed to load image">
                    <div class="card-body">
                    <h2 class="card-title">{{ $product['name'] }}</h2>
                    <h5 class="card-title">{{ $product['description'] }}</h5>
                    <div class="card-text mb-2">Loveca Stones: {{ $product['price'] }}</div>

                        @if ( $product['status']  === 'R')
                            <div class="card-text rounded-circle bg-secondary text-white" style="width: 1.8rem; padding-left:.6rem;">{{ $product['status'] }}</div>
                        @elseif ( $product['status']  === 'SR')
                            <div class="card-text rounded-circle bg-warning text-white" style="width: 2.3rem; padding-left:.6rem;">{{ $product['status'] }}</div>
                        @elseif ( $product['status']  === 'SSR')
                            <div class="card-text rounded-circle bg-danger text-white" style="width: 3rem; padding-left:.6rem;">{{ $product['status'] }}</div>
                        @endif

                    <a href="/products/{{ $product['slug'] }}" class="btn btn-dark mt-3">Details</a>
                    </div>
                </div>


        @endforeach
    </div>
@endsection

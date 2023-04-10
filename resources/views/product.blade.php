@extends('layouts.main')

@section('title', $product['name'] )
@section('description', $product['description'] )

@section('container')
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <h1 class="mx-5 my-5">{{ $product['name'] }}</h1>
            <div class="d-flex mb-2">
                <div>
                    <img src="/images/{{ $product['image'] . '.png'}}" alt="failed to load image" style="width: 20rem;">
                </div>
                <div style="margin-left: 5rem;">
                    @if ( $product['status']  === 'R')
                        <div class="card-text rounded-circle bg-secondary text-white" style="width: 1.8rem; padding-left:.6rem;">{{ $product['status'] }}</div>
                    @elseif ( $product['status']  === 'SR')
                        <div class="card-text rounded-circle bg-warning text-white" style="width: 2.3rem; padding-left:.6rem;">{{ $product['status'] }}</div>
                    @elseif ( $product['status']  === 'SSR')
                        <div class="card-text rounded-circle bg-danger text-white" style="width: 3rem; padding-left:.6rem;">{{ $product['status'] }}</div>
                    @endif
                    <h5 class="card- mt-3">Release Date: {{ $product['description'] }}</h5>
                    <div class="card-text">Product Price (Loveca Stones): {{ $product['price'] }}</div>
                    <a href="/products" class="">Back</a>
                </div>
            </div>
        </div>
    </div>

@endsection

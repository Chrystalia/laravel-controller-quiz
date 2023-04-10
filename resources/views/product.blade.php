@extends('layouts.main')

{{-- @section('title', {{ $status }}) --}}
@section('container')

    @foreach ($products as $product)

        @if ( $product['status']  === 'R')

        <div class="container bg-light">
            <div>
                Product Name: {{ $product['name'] }}
            </div>
            <div>
                Product Description:
            </div>
            <div>
                Status Product: {{ $product['status'] }}
            </div>
            <div>
                Product Price: {{ $product['price'] }}
            </div>
        </div>

        @elseif ( $product['status']  === 'SR')
        <div class="container bg-warning">
            <div>
                Product Name: {{ $product['name'] }}
            </div>
            <div>
                Product Description:
            </div>
            <div>
                Status Product: {{ $product['status'] }}
            </div>
            <div>
                Product Price: {{ $product['price'] }}
            </div>
        </div>
        @elseif ( $product['status']  === 'SSR')
        <div class="container bg-danger">
            <div>
                Product Name: {{ $product['name'] }}
            </div>
            <div>
                Product Description:
            </div>
            <div>
                Status Product: {{ $product['status'] }}
            </div>
            <div>
                Product Price: {{ $product['price'] }}
            </div>
        </div>
        @endif
    @endforeach
@endsection

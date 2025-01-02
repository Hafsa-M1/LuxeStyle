@extends('layouts.default')

@section('title', $product->title)

@section('content')
    <div class="container py-5">
        <!-- Product Title -->
        <h1 class="text-center" style="color: #004D40; font-weight: bold; font-size: 2.5rem;">{{ $product->title }}</h1>
        
        <!-- Product Image -->
        <div class="text-center my-4">
            <img src="{{ $product->image }}" class="img-fluid rounded shadow-lg" alt="{{ $product->title }}" style="max-height: 400px; object-fit: contain;">
        </div>
        
        <!-- Product Description -->
        <p class="lead text-center" style="color: #2C3E50; font-size: 1.2rem;">{{ $product->description }}</p>
        
        <!-- Product Price -->
        <div class="text-center my-4">
            <p style="font-size: 1.5rem; font-weight: bold; color: #1F618D;">
                <strong>Price:</strong> LKR {{ number_format($product->price, 2) }}
            </p>

            @if($product->discount > 0)
                <p class="text-center text-muted">
                    <small>Original Price: LKR {{ number_format($product->original_price, 2) }}</small>
                </p>
                <p class="text-center text-danger" style="font-size: 1.3rem;">
                    Discount: {{ $product->discount }}% OFF
                </p>
            @endif
        </div>

        <!-- Add to Cart Button -->
        <div class="text-center my-4">
            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                @csrf
                <button type="submit" class="btn" style="background-color: #1F618D; color: white; font-weight: bold; font-size: 1.2rem; padding: 12px 30px; border-radius: 50px;">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.default')

@section('title', 'LuxeStyle - Premium Shopping')

@section('content')
<main class="container py-5" style="max-width: 1300px;">
    <!-- Hero Section -->
    <section class="mb-5">
        <div class="p-5 bg-luxegreen text-white text-center rounded shadow-lg" 
             style="background: linear-gradient(135deg, #004d40, #00796b); padding: 100px 50px;">
            <h1 class="display-4 fw-bold" style="font-size: 3.5rem;">Welcome to LuxeStyle</h1>
            <p class="lead" style="font-size: 1.5rem;">Where luxury meets elegance. Discover products crafted for perfection.</p>
            <a href="#products" class="btn btn-light btn-lg shadow-sm px-5 py-3 rounded-pill">Explore Now</a>
        </div>
    </section>

    <!-- Flash Messages -->
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Product Section -->
    <section id="products">
        <h2 class="text-center fw-bold mb-5" style="color: #00796b; font-size: 2.5rem;">Discover Our Luxe Collection</h2>
        <div class="row g-4">
            @foreach ($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card shadow-lg h-100 border-0">
                        <div class="position-relative">
                            <img src="{{ $product->image }}" class="card-img-top rounded-top" alt="{{ $product->title }}">
                            @if($product->discount > 0)
                                <span class="badge bg-warning position-absolute top-0 start-0 m-2 rounded-pill">-{{ $product->discount }}% OFF</span>
                            @endif
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">
                                <a href="{{ route('products.details', $product->slug) }}" 
                                   class="text-decoration-none" 
                                   style="color: #004d40; font-weight: bold;">{{ $product->title }}</a>
                            </h5>
                            <p class="card-text">
                                <strong>Price:</strong> LKR {{ number_format($product->price, 2) }}
                                @if($product->discount > 0)
                                    <br>
                                    <small class="text-muted text-decoration-line-through">
                                        LKR {{ number_format($product->original_price, 2) }}
                                    </small>
                                @endif
                            </p>
                        </div>
                        <div class="card-footer bg-light d-flex justify-content-between">
                            <a href="{{ route('products.details', $product->slug) }}" 
                               class="btn btn-success shadow-sm">View Product</a>
                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success shadow-sm">Add to Basket</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="mt-5">
        <div class="p-5 rounded shadow-sm text-center" 
             style="background: linear-gradient(135deg, #004d40, #00796b); padding: 80px 50px;">
            <h2 class="fw-bold text-white" style="font-size: 2.5rem;">Stay in the Luxe Loop</h2>
            <p class="text-white" style="font-size: 1.25rem;">Subscribe to our newsletter for exclusive offers and updates.</p>

            <form action="{{ route('newsletter.subscribe') }}" method="POST" class="d-flex justify-content-center">
                @csrf
                <input type="email" name="email" class="form-control w-50 me-2" placeholder="Enter your email" required>
                <button type="submit" class="btn btn-light px-5 py-3 rounded-pill shadow-sm">Subscribe Now</button>
            </form>

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
    </section>
</main>
@endsection

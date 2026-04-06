@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-dark">Our Packages</h1>
        <p class="lead text-muted">Choose the perfect photobooth package</p>
    </div>

    <div class="row g-4 justify-content-center">

        @foreach($packages as $package)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm">

                <!-- Header -->
                <div class="card-header text-center 
                    {{ $loop->index == 1 ? 'bg-warning text-dark' : 'bg-dark text-white' }}">
                    
                    @if($loop->index == 1)
                        <span class="badge bg-dark text-warning mb-2">Most Popular</span>
                    @endif

                    <h4 class="my-0 fw-bold">{{ $package['name'] }}</h4>
                </div>

                <!-- Body -->
                <div class="card-body text-center d-flex flex-column">
                    <h3 class="text-warning">{{ $package['price'] }}</h3>

                    <ul class="list-unstyled mt-3 mb-4 text-start">
                        @foreach($package['features'] as $feature)
                            <li class="py-2 border-bottom">✔️ {{ $feature }}</li>
                        @endforeach
                    </ul>

                    <button class="btn btn-outline-dark mt-auto">
                        Choose Package
                    </button>
                </div>

            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection
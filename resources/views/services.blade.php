@extends('layouts.app')

@section('content')

<main class="flex-grow-1 py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-dark">Our Packages</h1>
            <p class="lead text-muted">Choose the perfect photobooth package for your special moment</p>
        </div>

        <div class="row g-4 justify-content-center">

            @foreach($packages as $package)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm 
                    {{ $package['highlight'] ? 'border-warning border-2' : 'border-0' }}">

                    <!-- Header -->
                    <div class="card-header text-center py-3
                        {{ $package['highlight'] ? 'bg-warning text-dark' : 'bg-dark text-white' }}">

                        @if($package['highlight'])
                        <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark text-warning px-3 py-2">
                            Most Popular
                        </span>
                        @endif

                        <h4 class="my-0 fw-bold mt-2">{{ $package['name'] }}</h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body bg-white text-center d-flex flex-column">

                        <h1 class="card-title h3">
                            {{ $package['price'] }}
                            <small class="text-muted fw-light">{{ $package['duration'] }}</small>
                        </h1>

                        <ul class="list-unstyled mt-3 mb-4 text-start">
                            @foreach($package['features'] as $feature)
                                <li class="py-2 border-bottom text-muted">✔️ {{ $feature }}</li>
                            @endforeach
                        </ul>

                        <button class="w-100 btn mt-auto
                            {{ $package['highlight'] ? 'btn-warning text-dark fw-bold' : 'btn-outline-dark' }}">
                            Choose {{ explode(' ', $package['name'])[0] }}
                        </button>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</main>

@endsection
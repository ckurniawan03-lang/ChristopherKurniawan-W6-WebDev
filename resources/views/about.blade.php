@extends('layouts.app')

@section('content')

<div class="container py-5">
    <div class="row align-items-center mb-5">

        <!-- Image -->
        <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="{{ asset('img/about.jpg') }}" 
                 alt="Our Team" 
                 class="img-fluid rounded shadow-lg">
        </div>

        <!-- Text -->
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold mb-3 text-dark">About Us</h1>

            <p class="lead text-muted mb-4">
                We are more than just a photobooth company. We create joy and capture memories.
            </p>

            <p class="text-secondary">
                Founded in 2020, Snap & Joy Photobooth has served weddings, corporate events, and private parties. 
                We ensure every guest leaves with a smile and a memorable experience.
            </p>

            <!-- Accordion -->
            <div class="accordion mt-4 shadow-sm" id="aboutAccordion">

                <!-- Mission -->
                <div class="accordion-item border-0 border-bottom border-warning">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold"
                                data-bs-toggle="collapse"
                                data-bs-target="#mission">
                            Our Mission
                        </button>
                    </h2>
                    <div id="mission" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            To provide fun and memorable photobooth experiences for every event.
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="accordion-item border-0 border-bottom border-warning">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold"
                                data-bs-toggle="collapse"
                                data-bs-target="#vision">
                            Our Vision
                        </button>
                    </h2>
                    <div id="vision" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            To become a leading photobooth service provider in Indonesia.
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection
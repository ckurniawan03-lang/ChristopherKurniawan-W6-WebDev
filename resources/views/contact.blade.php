@extends('layouts.app')

@section('content')

<main class="flex-grow-1 py-5">
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    
                    <div class="card-header bg-dark text-warning border-bottom border-warning border-3 text-center py-4">
                        <h2 class="mb-0 fw-bold">Get In Touch</h2>
                        <p class="mb-0 text-white-50">Have a question or want to book? Send us a message!</p>
                    </div>

                    <div class="card-body p-4 p-md-5 bg-white">

                        <!-- FIXED FORM -->
                        <form action="{{ route('contact') }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="John Doe" required>
                                        <label for="nameInput">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com" required>
                                        <label for="emailInput">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <select name="package" class="form-select" id="packageSelect">
                                            <option selected disabled>Select a package (Optional)</option>
                                            <option value="Basic Snap">Basic Snap</option>
                                            <option value="Premium Joy">Premium Joy</option>
                                            <option value="Wedding VIP">Wedding VIP</option>
                                        </select>
                                        <label for="packageSelect">Interested Package</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating mb-4">
                                        <textarea name="message" class="form-control" id="messageInput" placeholder="Message" style="height: 150px" required></textarea>
                                        <label for="messageInput">Your Message & Event Details</label>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-warning text-dark fw-bold btn-lg w-100 rounded-pill shadow-sm">
                                        Send Message
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        
        <!-- Contact Info -->
        <div class="row g-4 mt-5 text-center">

            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm border-top border-warning border-3 h-100">
                    <h5 class="fw-bold text-dark mb-2">Email Us</h5>
                    <p class="text-muted mb-0">halo@snapandjoy.co.id</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm border-top border-warning border-3 h-100">
                    <h5 class="fw-bold text-dark mb-2">Call/WhatsApp</h5>
                    <p class="text-muted mb-0">+62 812-3456-7890</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm border-top border-warning border-3 h-100">
                    <h5 class="fw-bold text-dark mb-2">Address</h5>
                    <p class="text-muted mb-0">Jl. Tunjungan No. 1, Surabaya, Jawa Timur</p>
                </div>
            </div>

        </div>

    </div>
</main>

@endsection
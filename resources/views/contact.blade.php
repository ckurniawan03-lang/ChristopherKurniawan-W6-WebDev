@extends('layouts.app')
// master
@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg">

                <!-- Header -->
                <div class="card-header bg-dark text-warning text-center py-4">
                    <h2 class="fw-bold">Get In Touch</h2>
                    <p class="text-white-50 mb-0">Send us a message!</p>
                </div>

                <!-- Form -->
                <div class="card-body p-4">

                    <form method="POST" action="#">
                        @csrf

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="col-12">
                                <select name="package" class="form-select">
                                    <option selected disabled>Select Package</option>
                                    <option>Basic Snap</option>
                                    <option>Premium Joy</option>
                                    <option>Wedding VIP</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-warning w-100 fw-bold">
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
            <div class="p-4 bg-white shadow-sm border-top border-warning border-3">
                <h5>Email</h5>
                <p class="text-muted">halo@snapandjoy.co.id</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white shadow-sm border-top border-warning border-3">
                <h5>Phone</h5>
                <p class="text-muted">+62 812-3456-7890</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="p-4 bg-white shadow-sm border-top border-warning border-3">
                <h5>Address</h5>
                <p class="text-muted">Surabaya, Indonesia</p>
            </div>
        </div>

    </div>

</div>

@endsection
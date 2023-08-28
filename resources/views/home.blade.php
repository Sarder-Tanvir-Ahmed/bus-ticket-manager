@extends('layouts.app')

@section('content')
<!-- Add your meta tags, stylesheets, and other head content here -->
<!-- Add animate.css library for animations -->

<!-- loader-->
<!-- Start wrapper-->

<!--Start sidebar-wrapper-->

<!--End sidebar-wrapper-->
<style>
    .show1 img {
        display: block;
    }

    .headerH {
        width: 70%;
        /* margin: auto; */
        text-align: center;
    }

    .headerH h3 {
        white-space: nowrap;
        text-shadow: 2px 2px 5px #000000;
        font-weight: bolder;
        font-size: 2.5rem;
    }

    .containerH {
        display: flex;

        flex-direction: column;
        height: 100%;
        flex-wrap: wrap;
        justify-content: center;
        align-content: center;
        align-items: center;

    }

    .show1 {
        display: flex;
        flex-wrap: wrap;
        height: 70%;
        gap: 1.1rem;
        justify-content: center;
        align-items: center;
        /* border: 2px solid #331; */
    }

    .featureH {
        width: 24%;
        height: 80%;
        /* border: 2px solid blue; */
        border-radius: 10px;
        background-color: #f3cc3e;
        box-shadow: 2px 2px 5px rgb(0,0,0,0.2);
        transition: all 0.5s ease-in-out;
        /* flex-basis: 220px; */
    }
    .featureH:hover{
        box-shadow: 2px 2px 5px rgb(0,0,0,0.5);
        cursor:pointer;
    }

    .image {
        /* border: 2px dotted red; */

        width: 100%;
        height: 60%;
    }

    .image img {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        width: 100%;
        height: 100%;
    }

    .content {
        padding: 0.5rem;
    }

    
    .content h4 {
        text-align: center;
        margin-top: 0.5rem;
        font-weight: bold;
    }

    /* Animation styles */
    .animate__animated {
        animation-duration: 1s;
    }

    .animate__fadeInUp {
        animation-name: fadeInUp;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translate3d(0, 50%, 0);
        }

        to {
            opacity: 1;
            transform: none;
        }
    }
</style>

<!-- Search and results section -->
<div class="containerH">
    <div class="headerH">
        <h3 class="text-white animate__animated animate__fadeInUp animate__delay-1s">
            Discover the Benefits of Our Bus Management Service
        </h3>
    </div>
    <div class="show1">
        <div class="featureH">
            <div class="image">
                <img src="{{ asset('food_images/whyChooseUs.jpg') }}" alt="Bus Image" class="img-fluid animate__animated animate__fadeInUp animate__delay-2s">
            </div>
            <div class="content">
                <h4 class="text-black">Why Choose Us?</h4>
                <p class="text-black">
                    Welcome to our Bus Ticket Management service, where your travel experience becomes a breeze.
                    With our user-friendly platform, we provide you with an array of featureHs to ensure your journey
                    is seamless and comfortable.
                </p>

            </div>
        </div>
        <div class="featureH">
            <div class="image">
                <img src="{{ asset('food_images/explore.jpeg') }}" alt="Routes Image" class="img-fluid animate__animated animate__fadeInUp animate__delay-3s">

            </div>
            <div class="content">
                <h4 class="text-black">Explore Routes</h4>
                <p class="text-black">
                    Embark on a journey with endless possibilities. Our extensive network of routes covers numerous
                    destinations, catering to your travel needs. Find the perfect route for your next adventure.
                </p>

            </div>
        </div>
        <div class="featureH">
            <div class="image">
                <img src="{{ asset('food_images/bus_seat.webp') }}" alt="Seat Image" class="img-fluid animate__animated animate__fadeInUp animate__delay-4s">
            </div>
            <div class="content">
                <h4 class="text-black">Customize Seats</h4>
                <p class="text-black">
                    Your comfort is our priority. With our user-friendly interface, customize your seat selection
                    before booking. Choose window or aisle seats, and travel in utmost comfort.
                </p>
            </div>
        </div>
        <div class="featureH">
            <div class="image">
                <img src="{{ asset('food_images/payment_hok_bkash.jpg') }}" alt="Payment Image" class="img-fluid animate__animated animate__fadeInUp animate__delay-5s">
            </div>
            <div class="content">
                <h4 class="text-black">Secure Payments</h4>
                <p class="text-black">
                    Your transactions are safe and secure. Our platform ensures your payment information is
                    protected, allowing you to book with confidence and convenience.
                </p>
            </div>
        </div>
    </div>
    <!-- ... (Your existing search section) ... -->
</div>

<!-- Informational content in a single row -->



<!-- ... (Your existing overlay, back to top button, and closing tags) ... -->

<!-- Additional styles -->



@endsection
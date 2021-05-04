@extends('layouts.app')

@section('title', 'NOMADS')

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <button class="btn btn-get-started px-3 mt-4">Get Started</button>
    </header>

    <main>
        <!-- Stats -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20k</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3k</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- End Stats -->

        <!-- Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col section-popular-heading text-center">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section class="section-popular-content" id="popular-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('/frontend/images/item_wisata_1.png');"
                            class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">Deratan, Bali</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('/frontend/images/item_wisata_2.png');"
                            class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('/frontend/images/item_wisata_3.png');"
                            class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div style="background-image: url('/frontend/images/item_wisata_4.png');"
                            class="card-travel text-center d-flex flex-column">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-location">dubai</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail') }}"class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Popular -->

        <!-- Netrowks -->
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us
                            <br />
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8">
                        <img src="frontend/images/logos_partner.png" alt="brand logo" />
                    </div>
                </div>
            </div>
        </section>
        <!-- End Netrowks -->

        <!-- Testimonial -->
        <section class="section-testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic_1.png" alt="user picture"
                                    class="rounded-circle mb-4" />
                                <h3>Angga Rizky</h3>
                                <p>“ It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankeeeeee “</p>
                            </div>
                            <hr>
                            <p>Trip to Ubud</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic_2.png" alt="user picture"
                                    class="rounded-circle mb-4" />
                                <h3>Shayna</h3>
                                <p>“ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “</p>
                            </div>
                            <hr>
                            <p>Trip to Nusa Penida</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic_3.png" alt="user picture"
                                    class="rounded-circle mb-4" />
                                <h3>Shabrina</h3>
                                <p>“ I loved it when the waves
                                    was shaking harder — I was
                                    scared too “</p>
                            </div>
                            <hr>
                            <p>Trip to Karimun Jawa</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col 12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-5 mr-3">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-5 my-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial -->
    </main>
@endsection
@extends('layouts.success')

@section('title', 'Checkout Success')
    
@section('content')
<main>
    <section class="section-success d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_mail.png') }}" alt="mail" />
                <h1>Yay! Success</h1>
                <p>We’ve sent you email for trip instruction <br>
                    please read it as well</p>
                <a href="{{ route('home') }}" class="btn btn-home-page mt-3 mx-5">Home Page</a>
            </div>
        </div>
    </section>
</main>
@endsection
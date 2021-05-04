@extends('layouts.checkout')

@section('title', 'NOMADS - Checkout')
    
@section('content')
<main>
    <section class="section-detail-header"></section>
    <section class="section-detail-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item ">Details</li>
                            <li class="breadcrumb-item active">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>Trip to Ubud, Bali, Indonesia</p>
                        <div class="attendee">
                            <table class="table table-borderless table-responsive-sm text-center table-attendee">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>VISA</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img src="{{ url('frontend/images/avatar_1.png') }}" alt="avatar" width="60" /></td>
                                        <td class="align-middle">Angga Risky</td>
                                        <td class="align-middle">CN</td>
                                        <td class="align-middle">N/A</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">
                                            <a href="">
                                                <img src="{{ url('frontend/images/ic_remove.png') }}" alt="ic remove">
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="{{ url('frontend/images/avatar_2.png') }}" alt="avatar" width="60" /></td>
                                        <td class="align-middle">Galih Pratama</td>
                                        <td class="align-middle">ID</td>
                                        <td class="align-middle">30 Days</td>
                                        <td class="align-middle">Active</td>
                                        <td class="align-middle"></td>
                                        <td class="align-middle">
                                            <a href="">
                                                <img src="{{ url('frontend/images/ic_remove.png') }}" alt="ic remove">
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="member mt-5">
                                <h2>Add Member</h2>
                                <form action="" class="form-inline">
                                    <label for="inputUsername" class="sr-only">Username</label>
                                    <input type="text" class="form-control mr-sm-2 mb-2" id="inputUsername"
                                        name="username" placeholder="Username" />

                                    <label for="inputVISA" class="sr-only">VISA</label>
                                    <select name="inputVISA" id="inputVISA"
                                        class="form-control custom-select mr-sm-2 mb-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>

                                    <label for="inputPassport" class="sr-only">DOE Passport</label>
                                    <input type="text" class="form-control datepicker" placeholder="DOE Passport"
                                        id="inputPassport" />

                                    <button type="submit" class="btn btn-add-now ml-md-2 px-4 mb-2">Add Now</button>
                                </form>
                                <div class="note mt-3">
                                    <h3 class="mt-2 mb-0">Note</h3>
                                    <p class="disclimer mb-0">
                                        You are only able to invite member that has registered in Nomads.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
                        <table class="trip-information mt-2">
                            <tr>
                                <th>Members</th>
                                <td class="text-right">2 person</td>
                            </tr>
                            <tr>
                                <th>Additional VISA</th>
                                <td class="text-right">$ 190,00</td>
                            </tr>
                            <tr>
                                <th>Trip Price</th>
                                <td class="text-right">$ 80,00 / person</td>
                            </tr>
                            <tr>
                                <th>Sub Total</th>
                                <td class="text-right">$ 280,00</td>
                            </tr>
                            <tr>
                                <th>Total (+Unique Code)</th>
                                <td class="text-right">
                                    <span class="amount">$ 279,</span>
                                    <span class="unique-code">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>
                        <div class="payment-instructions">
                            <h3>Payment Instructions</h3>
                            <p>Please complete your payment before to
                                continue the wonderful trip</p>
                        </div>
                        <div class="bank">
                            <div class="bank-account pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="bank">
                                <div class="desc">
                                    <h3>PT Nomads ID</h3>
                                    <p>0881 8829 8800 <br>Bank Central Asia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-account">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="bank">
                                <div class="desc">
                                    <h3>PT Nomads ID</h3>
                                    <p>0899 8501 7888 <br>Bank HSBC</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container text-center">
                        <a href="{{ route('checkout-success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                        <div class="mt-3">
                            <a href="{{ route('detail') }}" class="cancel-booking mt-5">Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" alt="icon doe"'
            }
        });
    });
</script>
@endpush
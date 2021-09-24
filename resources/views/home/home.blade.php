@extends('layouts.base')

@yield('header')

@yield('title')
    <h1>{{ env('APP_NAME') }} | Home</h1>
@show

@section('page-content')
    @parent
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1> Saintmartine</h1>
                            <p>Let’s start your journey with us, your dream will come true</p>
                            <a href="{{ route('trips') }}" class="btn_1">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="hotel-tab" data-toggle="tab" href="{{ route('home') }}"role="tab" aria-controls="hotel" aria-selected="true">hotel</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="tricket-tab" data-toggle="tab" href="{{ route('home') }}" role="tab" aria-controls="tricket" aria-selected="false">tricket</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="place-tab" data-toggle="tab" href="{{ route('home') }}" role="tab" aria-controls="place" aria-selected="false">place</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_1" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_2" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="{{ route('home') }}" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tricket" role="tabpanel" aria-labelledby="tricket-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_3" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_4" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="{{ route('home') }}" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="place" role="tabpanel" aria-labelledby="place-tab">
                                <div class="booking_form">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Choosace place </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_5" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <input id="datepicker_6" placeholder="Check in date">
                                            </div>
                                            <div class="form_colum">
                                                <select class="nc_select">
                                                    <option selected>Persone </option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form_btn">
                                                <a href="{{ route('home') }}" class="btn_1">search</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- booker part end-->

    <!--top place start-->
    <section class="top_place section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Top Places to visit</h2>
                    <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($tripList as $trip)
            <div class="col-lg-6 col-md-6">
                <div class="single_place">
                    <img src="{{ $trip->picture }}" alt="">
                    <div class="hover_Text d-flex align-items-end justify-content-between">
                        <div class="hover_text_iner">
                            <a href="{{ route('trip', $trip->id) }}" class="place_btn">travel</a>
                            <h3>{{ $trip->destination }}</h3>
                            <p>{{ substr($trip->description, 0, 25) }}...</p>
                            <div class="place_review">
                                {{-- // TODO: mettre les étoiles en dynamique --}}
                                {{-- @for($i=0; $i <= $trip->rating; $i++)
                                    <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                @endfor --}}
                                {{-- @for($i=$trip->rating; $i <= 5; $i++)
                                    <a href="{{ route('home') }}"><i class="fa fa-star-o"></i></a>
                                @endfor --}}
                                <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                <span>({{ $trip->topPlace }} reviews)</span>
                            </div>
                        </div>
                        <div class="details_icon text-right">
                            <i class="ti-share"></i>
                        </div>
                    </div>
                </div>
            </div>            
            @endforeach
            <a href="{{ route('trips') }}" class="btn_1 text-cnter">Discover more</a>
        </div>
    </div>
    </section>
    <!--top place end-->
@endsection

@yield('footer')

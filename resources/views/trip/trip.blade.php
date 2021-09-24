@extends('layouts.base')

@yield('header')

@yield('title')
    <h1>{{ env('APP_NAME') }} | Trip {{ $trip->id }}</h1>
@show

@section('page-content')
    @parent
    <!--event_part start-->
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="col-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>{{ $trip->status }}</h5>
                                        <h2>{{ $trip->destination }}</h2>
                                        <p>{{ $trip->description }}</p>
                                        <p>date: <span>{{ $trip->date }}</span> </p>
                                        <p>Cost: <span>Start from ${{ $trip->cost }}</span> </p>
                                        <p>Organizer: <span> {{ $trip->organizer }}</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                @for($i=1; $i <= $trip->rating; $i++)
                                                    <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                                @endfor
                                                /5
                                            </div>
                                        </div>
                                        <a href="{{ route('home') }}" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--event_part end-->

    <!-- tour details content css start-->
    <section class="tour_details_content section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="content_iner">
                        <p>{{ $trip->description }}</p>
                        <p>{{ $trip->description }}</p>
                        <p>{{ $trip->description }}</p>
                        <div class="tour_details_content_btn">
                            <a href="{{ route('trip', $trip->id) }}"class="btn_1">Book Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->
@endsection

@yield('footer')

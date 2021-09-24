@extends('layouts.base')

@yield('header')

@yield('title')
    <h1>{{ env('APP_NAME') }} | Trips</h1>
@show

@section('page-content')
    @parent
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item text-center">
                            <h2>Top Places</h2>
                            <p>home . Top Places</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- hotel list css start-->
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
                                    @for($i=1; $i <= $trip->rating; $i++)
                                        <a href="{{ route('home') }}"><i class="fas fa-star"></i></a>
                                    @endfor
                                    /5
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
            </div>
        </div>
    </section>
    <!-- hotel list css end -->
@endsection

@yield('footer')

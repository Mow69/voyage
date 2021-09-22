@extends('layouts.base')

@yield('header')

@yield('title')
    <h1>{{ env('APP_NAME') }} | Trip {{ $id }}</h1>
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
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
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
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.
                        Their</p>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                        <div class="tour_details_content_btn">
                            <a href="contact" class="btn_1">Book Ticket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tour details content css end-->
@endsection

@yield('footer')

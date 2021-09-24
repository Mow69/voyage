@extends('layouts.base')

@yield('header')

@yield('title')
    <h1>{{ env('APP_NAME') }} | About us</h1>
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
                            <h2>About Us</h2>
                            <p>home . about us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about us css start-->
    <section class="about_us section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_img">
                        <img src="{{ asset('img/about_img.png') }}" alt="#">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_text">
                        <h5>Who we are</h5>
                        <h2>We love to discover around the world</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged night yielding land creeping that seed appear were bearing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us css end-->
@endsection

@yield('footer')

@extends('layouts.site')
@section('title') About Us @endsection
@section('page-scripts')
    <script src="{{ asset('js/jquery.isotope.js') }}"></script>
    <script type="text/javascript">

        $(window).load(function(){
            var $container = $('.portfolioContainer');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });

            $('.portfolioFilter a').click(function(){
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }
                });
                return false;
            });
        });

    </script>

@endsection
@section('content')
    <!-- ======= 2.01 Page Title Area ====== -->

    <div class="pageTitleArea animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pageTitle">
                        <div class="h2">Our Projects</div>
                        <ul class="pageIndicate">
                            <li><a href="">Home</a></li>
                            <li><a href="">Our Works</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= /2.01 Page Title Area ====== -->

    <!-- ======= 2.02 Page About Area ====== -->

    <div class="aboutArea secPdng animated">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ $test }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ $test }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ $test }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ $test }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ $test }}" alt="">
                </div>
                <div class="col-md-4">
                    <img src="{{ $test }}" alt="">
                </div>
                <div class="col-md-8">
                    <img src="{{ $test }}" alt="">
                </div>
            </div>
        </div>
    </div>

        <div class="aboutServiceArea secPdng">
            <div class="container animated">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionTitle" style="margin-bottom:0;">
                            <div class="h2 ctaBtn text-left">Like what you see? Why not work with us? <a href="#" class="ctaBtn Btn btnOne pull-right">Contact Us</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
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

    <div class="aboutArea animated">
        <div class="container">
            <div class="row">
                <div class="portfolioFilter">

                    <a href="#" data-filter="*" class="current">All Categories</a>
                    <a href="#" data-filter=".people">People</a>
                    <a href="#" data-filter=".places">Places</a>
                    <a href="#" data-filter=".food">Food</a>
                    <a href="#" data-filter=".objects">Objects</a>

                </div>
                <div class="portfolioContainer">

                    <div class="objects">
                        <img src="{{ $test }}" alt="image">
                    </div>

                    <div class="people places">
                        <img src="images/surf.jpg" alt="image">
                    </div>

                    <div class="food">
                        <img src="images/burger.jpg" alt="image">
                    </div>

                    <div class="people places">
                        <img src="images/subway.jpg" alt="image">
                    </div>

                    <div class="places objects">
                        <img src="images/trees.jpg" alt="image">
                    </div>

                    <div class="people food objects">
                        <img src="images/coffee.jpg" alt="image">
                    </div>

                    <div class="food objects">
                        <img src="images/wine.jpg" alt="image">
                    </div>

                    <div class="food">
                        <img src="images/salad.jpg" alt="image">
                    </div>

                </div>
            </div>
        </div>
    </div>

        <div class="aboutServiceArea secPdng">
            <div class="container animated">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sectionTitle" style="margin-bottom:0;">
                            <div class="h2">We are committed to providing <br>great services and products to our
                                customers.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('includes.cta.newsletter')

@endsection
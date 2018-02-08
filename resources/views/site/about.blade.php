@extends('layouts.site')
@section('title') About Us @endsection
@section('content')
    <!-- ======= 2.01 Page Title Area ====== -->

    <div class="pageTitleArea animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="pageTitle">
                        <div class="h2">About Us</div>
                        <ul class="pageIndicate">
                            <li><a href="">Home</a></li>
                            <li><a href="">About Us</a></li>
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
                <div class="col-md-6 col-sm-6">
                    <div class="aboutContent">
                        <div class="aboutCell">
                            <h2>Welcome to Symantic. <br>Creative Digital Excellence</h2>
                            <div class="aboutTxt">
                                <p>Established in 2013, Symantic has had the privilege of working with a range of clients from the fin-tech to industrial sectors, creating successful solutions to every day problems.</p>
                                <p>We provides each and every client with digital excellence, solution based services and products that empower customers and client with the tools they need to excell in their business.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="aboutImg">
            <img src="img/about01.jpg" alt="" style="width:100%;height:auto">
            <img src="{{$test}}" />
        </div>
    </div>

    <!-- ======= /2.02 Page About Area ====== -->

    <!-- ======= 2.03 Page Service Area ====== -->
    <div class="aboutServiceArea secPdng">
        <div class="container animated">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle" style="margin-bottom:0;">
                        <div class="h2">We are committed to providing <br>great services and products to our customers.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /2.03 Page Service Area ====== -->

    <!-- ======= 2.04 Page Team Area ====== -->
    {{--<div class="teamArea secPdng animated">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="sectionTitle">--}}
                        {{--<div class="h2">Meet with our awesome team.</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="singleTeam">--}}
                        {{--<div class="teamImg"><img src="img/about-team1.jpg" alt=""></div>--}}
                        {{--<div class="teamContent">--}}
                            {{--<div class="memberName h4">Eamon Boonzaaier</div>--}}
                            {{--<span class="position">Founder / Senior Systems Architect</span>--}}
                            {{--<div class="teamTxt">--}}
                                {{--<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mol estie consequat, vel illum.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="singleTeam">--}}
                        {{--<div class="teamImg"><img src="img/about-team2.jpg" alt=""></div>--}}
                        {{--<div class="teamContent">--}}
                            {{--<div class="memberName h4">James Martin</div>--}}
                            {{--<span class="position">Web Experts</span>--}}
                            {{--<div class="teamTxt">--}}
                                {{--<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mol estie consequat, vel illum.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 col-sm-6">--}}
                    {{--<div class="singleTeam">--}}
                        {{--<div class="teamImg"><img src="img/about-team3.jpg" alt=""></div>--}}
                        {{--<div class="teamContent">--}}
                            {{--<div class="memberName h4">James Martin</div>--}}
                            {{--<span class="position">Web Experts</span>--}}
                            {{--<div class="teamTxt">--}}
                                {{--<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mol estie consequat, vel illum.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- ======= /2.04 Page Team Area ====== -->

    <!-- ======= 5.01 Testimonial Area ====== -->
    <div class="testimonialArea secPdng">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle animated">
                        <div class="h2">What our clients have to say.</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="singleTst animated">
                        <p>“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conse quat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.”</p>
                        <span class="clientName">David Ramon</span>
                        <a href="#">www.sitename.com</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="singleTst animated">
                        <p>“Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conse quat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.”</p>
                        <span class="clientName">David Ramon</span>
                        <a href="#">www.sitename.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /5.01 Testimonial Area ====== -->

    @include('includes.cta.newsletter')

@endsection
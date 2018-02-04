@extends('layouts.site')
@section('title')

    Home
@endsection
@section('content')
    <!-- ======= 1.02 Home Area ====== -->
    <div class="homeArea animated">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="homeContent">
                        <span class="topTxt">Advertise &nbsp; - &nbsp; Market &nbsp; - &nbsp; Brand</span>
                        <span class="h2 homeTitle">WE BUILD DIGITAL EXPERIENCES</span>
                        <p>We are a digital company with a creative soul and a business mind. We love to design unique digital experiences geared towards a single goal: <span class="bold">success</span>.</p>
                        <div class="homeBtn">
                            <a href="#" class="btnOne Btn"><i class="icofont icofont-imac"></i>Get Started Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="homeImgTable">
                        <div class="homeImg">
                            <img src="img/home-dsk-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="clouds">
                <img src="img/clouds/cloud-1.png" alt="" class="cloud1">
                <img src="img/clouds/cloud-2.png" alt="" class="cloud2">
                <img src="img/clouds/cloud-3.png" alt="" class="cloud3">
                <img src="img/clouds/cloud-4.png" alt="" class="cloud4">
                <img src="img/clouds/cloud-5.png" alt="" class="cloud5">
            </div>
        </div>
    </div>
    <!-- ======= /1.02 Home Area ====== -->

    @include('includes.cta.cta1')

    @include('includes.cta.cta2',[ 'data' => [
    'img' => asset('img/slide-1.jpg'),
    'tagline' => 'Complete digital solutions to expand your business for the future',
    'btn_text' => 'View Services',
    'btn_route' => 'services.index'
    ]])

    <div class="sectionBar"></div>


    <!-- ======= 1.04 Service Area ====== -->
    <div class="serviceArea secPdng animated">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sectionTitle">
                        <div class="h2">Why you should <span>choose us?</span></div>
                    </div>
                </div>
            </div>
            <div class="row service">
                <div class="col-md-4 col-sm-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <img src="img/icon/gear.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Strategic Excellence</span>
                            <p>
                                We provide companies with a excellent <span class="bold"> strategic approach  </span>  and understanding of the current <span class="bold">market trends</span> and <span class="bold">customer requirements</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <img src="img/icon/cloud-up.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Development </span>
                            <p><span class="bold">Modern reliable technologies</span> is used throughout all our <span class="bold">products</span> and <span class="bold">service</span>, ensuring that our clients recieve the best <span class="bold">tools</span> to <span class="bold">grow their businesses</span>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <img src="img/icon/care-support.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Personalised Service</span>
                            <p>We provide each <span class="bold">client exclusivity</span>, utilising a broad range of <span class="bold">interpersonal skills</span> to ensure your project receives the <span class="bold">dedicated attention</span> it deserves.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <img src="img/icon/serv-04.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Creative Ideas</span>
                            <p>Our primary focus is to deliver the best possible <span class="bold"> user experience </span> given the rapidly growing mobile market in South Africa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <img src="img/icon/serv-05.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Complete Solutions</span>
                            <p>We believe in providing you with <span class="bold">packaged solutions</span>, formed from our range of services, to provide you with the <span class="bold">ultimate solution</span>.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="singleService">
                        <div class="serviceIcon">
                            <img src="img/icon/serv-06.png" alt="">
                        </div>
                        <div class="serviceContent">
                            <span class="h3">Analyses & Feedback</span>
                            <p><span class="bold">Analyses, reporting and feedback</span> forms an integral part of our <span class="bold">strategic vision</span> for the longevity of our <span class="bold">clients</span> products and services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= /1.04 Service Area ====== -->



    @include('includes.cta.newsletter')


@endsection
<!-- ======= 1.01 Header Area ====== -->
<header>
    <div class="headerTopArea">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    @guest
                    @else
                            <ul class="topInfo">

                                <li class="">
                                    <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                        <i class="fa fa-user"></i> {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu pull-right" style="    top: 45px;
    right: 13px;">
                                    <li>
                                        <a href="{{ route('logout') }}" style="line-height:15px";
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                </li>
                            </ul>
                            @endguest
                    <ul class="topInfo">

                        <li class="call"><a href="tel:+27838223872"><i class="icofont icofont-ui-call"></i>+27 (0)83 822 3872</a></li>
                        <li class="email"><a href="mailto:info@symantic.co.za"><i class="icofont icofont-ui-v-card"></i>info@symantic.co.za</a></li>
                        <li class="clientAreaLi"><span><i class="icofont icofont-user-alt-3"></i>Request a Callback</span></li>
                    </ul>
                    <div class="clientLogin">
                        <form action="#" method="post">
                            <div class="closeBtn"><i class="icofont icofont-close"></i></div>
                            <div class="h5">Request a Callback</div>
                            <div class="userName"><input name="name" placeholder="Full Name" type="text"></div>
                            <div class="tel">
                                <input name="tel" placeholder="Telephone Number" type="text">
                            </div>
                            <div class="services">
                                <select onchange="changeMe(this)" name="contact_service" id="contService">
                                    @foreach($serviceList as $service_value => $service_name )
                                    <option value="{{ $service_value }}">{{$service_name}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="message"><textarea name="message" id="callbackMessage" cols="30" rows="10" ></textarea></div>
                            <input type="submit" value="Call me Back">
                            {{--<div class="h5">Forgot Passsword? <a href="#">Click here</a></div>--}}
                            {{--<div class="logBtm">--}}
                                {{--<div class="h5">Don’t have an account yet?</div>--}}
                                {{--<a href="#" class="signUp">Click here to sign up.</a>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="headerBottomArea">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-9">
                    <a href="{{ route('home') }}" class="logo"><img src="img/logo.png" alt=""></a>
                </div>
                <div class="col-md-10 menuCol col-sm-9 col-xs-1">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"></span>
                            <i class="fa fa-navicon"></i>
                        </button>
                    </div>
                    <nav id="navbar" class="collapse navbar-collapse">
                        <ul id="nav">
                            <li {{ (Request::is('/') ? 'class=current-menu-item' : '') }} ><a href="{{ route('home') }}">Home</a>
                            </li>
                            {{--<li {{ (Request::is('about') ? 'class=current-menu-item' : '') }}><a href="{{ route('about') }}">About</a>--}}
                            {{--</li>--}}
                            <li {{ (Request::is('works') ? 'class=current-menu-item' : '') }}><a href="{{ route('works') }}">Our Works</a>
                            </li>
                            <li class="#"><a href="#" >Services</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('strategic_marketing') }}">Consulting & Marketing</a></li>
                                    <li><a href="{{ route('branding_design') }}">Branding & Design</a></li>
                                    <li><a href="{{ route('websites_applications') }}">Websites & Applications</a></li>
                                    <li><a href="{{ route('social_media_management') }}">Social Media Management</a></li>
                                    <li><a href="{{ route('tools_integrations') }}">Tools & Integrations</a></li>
                                </ul>
                            </li>
                            <li {{ (Request::is('business-development-solutions') ? 'class=current-menu-item' : '') }}>
                                <a href="{{ route('sbds') }}">Symantic BDS</a>
                            </li>
                            <li><a href="#">Launch-IT <small>&trade;</small></a></li>
                            <li><a href="support.html">Blog</a></li>
                            <li><a href="#">Support</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">FAQ</a></li>
                                    <li><a href="single-blog.html">Get in Touch</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ======= /1.01 Header Area ====== -->
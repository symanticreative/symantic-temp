<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--<!-- Twitter -->--}}
    {{--<meta name="twitter:site" content="@themepixels">--}}
    {{--<meta name="twitter:creator" content="@themepixels">--}}
    {{--<meta name="twitter:card" content="summary_large_image">--}}
    {{--<meta name="twitter:title" content="Bracket">--}}
    {{--<meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">--}}
    {{--<meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">--}}

    {{--<!-- Facebook -->--}}
    {{--<meta property="og:url" content="http://themepixels.me/bracket">--}}
    {{--<meta property="og:title" content="Bracket">--}}
    {{--<meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">--}}

    {{--<meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">--}}
    {{--<meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">--}}
    {{--<meta property="og:image:type" content="image/png">--}}
    {{--<meta property="og:image:width" content="1200">--}}
    {{--<meta property="og:image:height" content="600">--}}

    <!-- Meta -->
    <meta name="description" content="Symantic Website Dashboard">
    <meta name="author" content="Symantic">

    <title>{{ config('app.name', 'Symantic') }} - @yield('title')</title>

    <!-- vendor css -->
    <link href="{{ asset('admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/bracket.min.css') }}">
</head>

<body>

    @include('admin.includes.left_sidebar')
    @include('admin.includes.header')
    @include('admin.includes.right_sidebar')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{route('dashboard.index')}}">HOME</a>
                    @for($i = 2; $i <= count(Request::segments()); $i++)
                    <span class="breadcrumb-item">
                            <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                                {{strtoupper(Request::segment($i))}}
                            </a>
                    </span>
                    @endfor

            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            @yield('page_name')
        </div>

        <div class="br-pagebody">

          @yield('content')

        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script src="{{ asset('admin/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('admin/lib/bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
    <script src="{{ asset('admin/lib/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('admin/lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
    <script src="{{ asset('admin/lib/peity/jquery.peity.js') }}"></script>

    <script src="{{ asset('admin/js/bracket.js') }}"></script>
</body>
</html>
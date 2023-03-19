<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body>

<div class="container">
    <!-- Top box -->
    <!-- Logo & Site Name -->
    <div class="placeholder">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
            <div class="tm-header">
                <div class="row tm-header-inner">
                    <div class="col-md-6 col-12">
                        <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                        <div class="tm-site-text-box">
                            <h1 class="tm-site-title">Simple House</h1>

                        </div>
                    </div>
                    <nav class="col-md-6 col-12 tm-nav">
                        <ul class="tm-nav-ul">
                            @if(auth()->check())
                            <li class="tm-nav-li"><a href="{{route('home')}}" class="tm-nav-link">Home</a></li>
                            <li class="tm-nav-li"><a href="{{route('about')}}" class="tm-nav-link">About</a></li>
                            <li class="tm-nav-li"><a href="{{route('reservation')}}" class="tm-nav-link">Reservation</a></li>
                            <li class="tm-nav-li"><a href="{{route('logout')}}" class="tm-nav-link">Logout</a></li>
                            @else
                                <li class="tm-nav-li"><a href="{{route('home')}}" class="tm-nav-link ">Home</a></li>
                                <li class="tm-nav-li"><a href="{{route('about')}}" class="tm-nav-link">About</a></li>
                                <li class="tm-nav-li"><a href="{{route('reservation')}}" class="tm-nav-link">Reservation</a></li>
                                <li class="tm-nav-li"><a href="{{route('login')}}" class="tm-nav-link">Login</a></li>
                                <li class="tm-nav-li"><a href="{{route('registration')}}" class="tm-nav-link">Registration</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <main>
        @include('layouts.alert')
        @yield('content', "No Content Available")
    </main>

    <footer class="tm-footer text-center">
        <p>Copyright &copy; 2020 Simple House

            | Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
    </footer>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/parallax.min.js"></script>
<script>
    $(document).ready(function(){
        // Handle click on paging links
        $('.tm-paging-link').click(function(e){
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });
    });
</script>
</body>
</html>

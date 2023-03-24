@extends('layouts.app')
@section('content')
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
        <p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
    </header>

    <div class="tm-paging-links">
        <nav>

            <ul>
                @foreach($types as $type)
                    <li class="tm-paging-item"><a href="{{route('home',$type)}}" >{{$type}}</a></li>
                @endforeach

            </ul>
        </nav>
    </div>

    <!-- Gallery -->
    <div class="row tm-gallery">
        @foreach($foods as $food)

        <div id="tm-gallery-page-{{strtolower($food->type)}}" class="tm-gallery-page">
            <a href="" style="color:black;">
                <article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                    <figure>
                        <img src="{{$food->image}}" alt="Image" class="img-fluid tm-gallery-img" />
                        <figcaption>
                            <h4 class="tm-gallery-title">{{$food->name}}</h4>
                            <p class="tm-gallery-description">{{$food->description}}</p>
                            <p class="tm-gallery-price">{{$food->price}}</p>
                        </figcaption>
                    </figure>
                </article>
            </a>
        </div>
        @endforeach


    </div>
    <div class="tm-section tm-container-inner">
        <div class="row">
            <div class="col-md-6">
                <figure class="tm-description-figure">
                    <img src="img/img-01.jpg" alt="Image" class="img-fluid" />
                </figure>
            </div>
            <div class="col-md-6">
                <div class="tm-description-box">
                    <h4 class="tm-gallery-title">Maecenas nulla neque</h4>
                    <p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template collection site is strictly prohibited. You will need to <a rel="nofollow" href="https://templatemo.com/contact">talk to us</a> for additional permissions about our templates. Thank you.</p>
                    <a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
                </div>
            </div>
        </div>
    </div>
@endsection

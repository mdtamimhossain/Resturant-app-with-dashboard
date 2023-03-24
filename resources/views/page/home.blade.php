@extends('layouts.app')
@section('content')
    <style>
        .tm-gallery-row {
            display: flex;
            flex-wrap: wrap;
            margin: -10px;
        }
        button {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        button:hover {
            background-color: #3e8e41;
        }

        button:active {
            background-color: #1e5229;
        }

        .tm-gallery-item {
            flex: 1 0 25%;
            padding: 10px;
            box-sizing: border-box;
        }

        @media (max-width: 992px) {
            .tm-gallery-item {
                flex-basis: 33.33%;
            }
        }

        @media (max-width: 768px) {
            .tm-gallery-item {
                flex-basis: 50%;
            }
        }

        @media (max-width: 576px) {
            .tm-gallery-item {
                flex-basis: 100%;
            }
        }</style>
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
        <p class="col-12 text-center">Total 3 HTML pages are included in this template. Header image has a parallax effect. You can feel free to download, edit and use this TemplateMo layout for your commercial or non-commercial websites.</p>
    </header>

    <div class="tm-paging-links">
        <nav>

            <ul>
                @foreach($types as $type)
                    <li class="tm-paging-item">
                        <a href="{{route('home',$type)}}">{{$type}}</a>

                    </li>
                @endforeach

            </ul>
        </nav>
    </div>


    <!-- Gallery -->
    <div class="row tm-gallery">

        <div id="tm-gallery-page-pizza" class="tm-gallery-page">
            @foreach($foods as $food)
                <div class="tm-gallery-item">
                    <a href="#" style="text-decoration: none; cursor: pointer;">
                        <img src="{{ asset('storage/public/food_images/' . basename($food->image)) }}" alt="Image" class="img-fluid tm-gallery-img"/>
                        <h4 class="tm-gallery-title">{{$food->name}}</h4>
                        <p class="tm-gallery-description">{{$food->description}}</p>
                        <p class="tm-gallery-price">{{$food->price}}$</p>
                    </a>
                    <button style="margin-top: 10px;">Order</button>
                </div>
            @endforeach
        </div>

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

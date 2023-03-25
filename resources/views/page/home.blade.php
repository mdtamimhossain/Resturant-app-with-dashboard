@extends('layouts.app')
@section('content')
    <style>
        /* Style for the "Order" button */
        button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Style for the food name element */
        .tm-gallery-title {
            display: inline-block;
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            float: left;
        }

        /* Style for the price element */
        .tm-gallery-price {
            display: inline-block;
            margin: 0 10px;
            font-size: 18px;
            font-weight: bold;
            float: left;
        }

        /* Style for the article element */
        .tm-gallery-item {
            margin-bottom: 20px;
            overflow: auto; /* add this to clear the float */
        }

        /* Style for the figcaption element */
        .tm-gallery-item figcaption {
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 4px;
        }



        button:hover {
            background-color: #3e8e41;
        }

        button:active {
            background-color: #1e5229;
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
        <p class="col-12 text-center"> m ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
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
                        <button style="margin-top: 10px;">Order</button>
                        <p class="tm-gallery-price">{{$food->price}}$</p>
                    </a>

                </div>
            @endforeach
        </div>

    </div>
@endsection

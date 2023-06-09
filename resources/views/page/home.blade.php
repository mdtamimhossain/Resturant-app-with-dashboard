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
        .item-btn{
            padding: 10px 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #2F956D;
            background-color: transparent;
        }
        .item-btn:active,
        .item-btn:hover{
            background-color: #2F956D;
            color: white;
        }
            /* Style for the food name element */
            .tm-gallery-title {
                margin: 0;
                font-size: 24px;
                font-weight: bold;
            }
            .tm-card-wrap{
                gap: 1em;
                display: flex;
                flex-wrap: wrap;
                margin: 0 4vw ;
                justify-content: center;

            }

            .price_and_button {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }


            /* Style for the price element */
            .tm-gallery-price {
                margin: 0 10px;
                font-size: 18px;
                font-weight: bold;
                float: left;
            }

            /* Style for the article element */
            .tm-gallery-item {
                margin-bottom: 20px;
               /* margin: 20px;*/

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
            @media (min-width: 992px) {
                .tm-gallery-item {
                    flex-basis: 33.33%;
                    flex-grow: 1;
                }
            }

            @media (max-width: 991px) and (min-width: 576px) {
                .tm-gallery-item {
                    flex-basis: 50%;
                    flex-grow: 1;
                }
            }

            @media (max-width: 575px) {
                .tm-gallery-item {
                    flex-basis: 100%;
                    flex-grow: 1;
                }
            }
            </style>



    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
        <p class="col-12 text-center"> m ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
    </header>

    <div class="tm-paging-links">
        <nav>

            <ul>
                @foreach($types as $type)
                    <li class="tm-paging-item">
                        <a class="item-btn" href="{{route('home',$type)}}">{{$type}}</a>

                    </li>
                @endforeach

            </ul>
        </nav>
    </div>


    <!-- Gallery -->
        <div class="row tm-gallery">
            <div class="tm-card-wrap">
                @foreach($foods as $food)
                    <div class="tm-gallery-item">
                        <form method="GET" action="{{ route('order',$food->id) }}">
                            @csrf
                            <a href="#" style="text-decoration: none; cursor: pointer;">
                                <div>
                                    <img src="{{ asset('storage/public/food_images/' . basename($food->image)) }}" alt="Image" class="img-fluid tm-gallery-img"/>
                                </div>
                                <h4 class="tm-gallery-title">{{ $food->name }}</h4>

                                <div class="price_and_button">
                                    <button type="submit" style="margin-top: 10px;">Order</button>
                                    <span class="tm-gallery-price">{{ $food->price }}$</span>
                                </div>
                            </a>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
@endsection

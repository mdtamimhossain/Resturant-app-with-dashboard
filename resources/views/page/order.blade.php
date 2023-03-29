@extends('layouts.app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <header class="row tm-welcome-section">
        <h2 class="col-12 text-center tm-section-title">Order Your Dish</h2>
    </header>

    <div class="tm-container-inner-2 tm-contact-section">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="{{route('order.process')}}"  class="tm-contact-form">
                    @csrf
                    <div class="form-group">
                        <input name="food" class="form-control" value="{{$food->name}}" required=""/>
                    </div>
                    <div class="form-group">
                        <input name="name" class="form-control" placeholder="Your Full Name" required=""/>
                    </div>

                    <div class="form-group">
                        <input name="price" class="form-control" value="{{$food->price}}" required=""/>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <fieldset>
                            <select value="number" name="foodNumber" id="number-food">
                                <option value="number-guests">Number Of Food</option>
                                <option name="1" id="1">1</option>
                                <option name="2" id="2">2</option>
                                <option name="3" id="3">3</option>
                                <option name="4" id="4">4</option>
                                <option name="5" id="5">5</option>
                                <option name="6" id="6">6</option>
                                <option name="7" id="7">7</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="form-group">
                        <textarea rows="4" cols="20" name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group tm-d-flex">
                        <button type="submit" class="tm-btn tm-btn-success tm-btn-right">
                            Order
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="tm-address-box">
                    <h4 class="tm-info-title tm-text-success">Note</h4>
                    <address>
                       If you are ordering pizza or burger please specify its size on message section.
                       small , medium, large
                    </address>

                    <a href="mailto:info@company.co" class="tm-contact-link">
                        <i class="fas fa-envelope tm-contact-icon"></i>info@company.co
                    </a>
                </div>
            </div>

        </div>
    </div>

@endsection

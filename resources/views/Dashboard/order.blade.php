@extends('layouts.dashboard')
@section('content')
    <div id="orders" class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="mb-4">orders</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Food Name</th>
                            <th>Number of Item</th>
                            <th>Message</th>
                            <th>Uncompleted</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->name}}</td>
                            <td>{{$order->food}}</td>
                            <td>{{$order->foodNumber}}</td>
                            <td>{{$order->message}}</td>
                            <form action="{{route('dashboard.deleteOrder',$order->id)}}" method="POST">
                                @csrf
                                <td><button type="submit" class=" btn-info submit-btn" onclick="return confirm('Order served?')">Complete</button></td>
                            </form>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
@endsection

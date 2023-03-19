@extends('layouts.dashboard')
@section('content')
    <div id="reservations" class="section">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="mb-4">Reservations</h2>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Number of Guests</th>
                            <th>Date</th>
                            <th>Message</th>
                            <th>Uncompleted</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                            <td>{{$reservation->name}}</td>
                            <td>{{$reservation->email}}</td>
                            <td>{{$reservation->phone}}</td>
                            <td>{{$reservation->guestNumber}}</td>
                            <td>{{$reservation->date}}</td>
                            <td>{{$reservation->message}}</td>
                            <form action="{{route('deleteReservation',$reservation->id)}}" method="POST">
                                @csrf
                                <td><button type="submit" class=" btn-info submit-btn" >Complete</button></td>
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

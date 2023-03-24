@extends('layouts.dashboard')
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
    <div id="food" class="section">
        <h3>Add a new dish</h3>
        <form method="POST" action="{{route('dashboard.foodUpload')}}" enctype="multipart/form-data" class="food-form">
            @csrf
            <div class="form-group">
                <label for="dish_name">Dish Name:</label>
                <input type="text" name="name" id="dish_name" required>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" required>
                @error('description')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price" required step=".01" min="0">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">

                <label for="price">type</label>
                <input type="text" name="type" id="type" required>
                @error('type')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" id="image" required accept="image/*">
                @error('type')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class=" btn-info submit-btn">Add Dish</button>
        </form>


        <h2>Food</h2>
        <table>
            <thead>
            <tr>
                <th>Dish Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>type</th>
            </tr>
            </thead>
            <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{$food->name}}</td>
                    <td>{{$food->description}}</td>
                    <td>{{$food->price}}</td>
                    <td>{{$food->type}}</td>
                </tr>
            @endforeach
            <!-- Add more rows here for additional dishes -->
            </tbody>
        </table>
    </div>
@endsection

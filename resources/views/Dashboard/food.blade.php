@extends('layouts.dashboard')
@section('content')

<div id="food" class="section">
    <h3>Add a new dish</h3>
    <form action="submit_food.php" method="post" enctype="multipart/form-data" class="food-form">
        <div class="form-group">
            <label for="dish_name">Dish Name:</label>
            <input type="text" name="dish_name" id="dish_name" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" required>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required step=".01" min="0">
        </div>
        <div class="form-group">
            <label for="food type">Food Type:</label>
            <input type="text" name="food_type" id="food_type" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo" required accept="image/*">
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
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Spaghetti Carbonara</td>
            <td>Pasta dish with bacon, eggs, and cheese</td>
            <td>$12.99</td>
            <td>PIZZA</td>
            <td><img src="https://www.example.com/spaghetti_carbonara.jpg" alt="Spaghetti Carbonara"></td>
        </tr>
        <tr>
            <td>Chicken Tikka Masala</td>
            <td>Indian chicken dish in a spiced tomato-based sauce</td>
            <td>$14.99</td>
            <td>PIZZA</td>
            <td><img src="https://www.example.com/chicken_tikka_masala.jpg" alt="Chicken Tikka Masala"></td>
        </tr>
        <!-- Add more rows here for additional dishes -->
        </tbody>
    </table>
</div>
@endsection

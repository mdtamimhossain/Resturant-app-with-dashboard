<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-5yl61GKaUUJ1+Ohd8U2GrPqeqY+73X9xErvzD8G/Qn1UvGVkJH6IwKeue5A5lOX+" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
        }
        body {

            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        .sidebar {
            background-color: #363940;
            color: #fff;
            height: 100vh;
            left: 0;
            position: fixed;
            top: 0;
            width: 250px;
        }
        .sidebar ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .sidebar li {
            border-bottom: 1px solid #444;
            padding: 15px 20px;
        }
        .sidebar li.active {
            background-color: #444;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
        }
        .main {
            margin-left: 250px;
            padding: 20px;
        }
        .section {
            margin-bottom: 50px;
        }
        .section h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }
        table thead th,
        table tbody td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        table thead th {
            background-color: #eee;
        }
        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        a {
            background-color: #3b73af;
            border: none;
            border-radius: 3px;
            color: #fff;
            display: inline-block;
            margin-right: 10px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        a:hover {
            background-color: #2c5f92;
        }

        .sidebar_cap{
            padding-top: 30px;
            padding-left: 10px;
        }
        .dashboard-tab {
            background-color: #3b73af;
            color: #fff;
            font-weight: bold;
            padding: 15px 40px;
            border-radius: 5px 5px 0 0;
            margin-bottom: 20px;
        }

    </style>
    <link rel="stylesheet" href="/Dashboard/css/food.css">
    <link rel="stylesheet" href="public/Dashboard/css/user.css">
    <link rel="stylesheet" href="public/Dashboard/css/reservation.css">

</head>
<body >
<div class="dashboard-tab">
    <center>
        <h1>Dashboard</h1>
    </center>
</div>
<div class="sidebar">
    <ul>
        <div class="sidebar_cap">
            <li><a href="{{route('dashboard.user')}}">Users</a></li>
            <li class=""><a href="{{route('dashboard.food')}}">Food</a></li>
            <li><a href="{{route('dashboard.reservation')}}">Reservations</a></li>
            <li><a href="#chefs">Chefs</a></li>
        </div>
    </ul>
</div>
<div class="main">
    @yield('content','No Content available')
</div>
</body>
</html>

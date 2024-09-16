<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN DASHBOARD</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Vertical Navbar -->
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" {{route('Dashboard')}} ">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("add")}}">
              <span data-feather="file"></span>
              Add new item
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Visitors
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}">
              <span data-feather="layers"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h1>VIEW ITEMS</h1>
      <p>This is where the main content will go.</p>

      <div class="table-container">
        <table class="table table-bordered">
            <thead>
                <th>N/O</th>
                <th>make</th>
                <th>car name</th>
                <th>ENGINE TYPE</th>
                <th>PRICE(K)</th>
                <th>DESCRIPTION</th>
                <th>action</th>
            </thead>
            @foreach($data as $row)
            <tbody>
              
                <td> {{$row->id}} </td>
                <td> {{$row->car_name}} </td>
                <td> {{$row->engineType}} </td>
                <td>  {{$row->price}} </td>
                <td> {{$row->context }} </td>
                <td> <img src="{{ asset('Images/' . $row->img1)}}" alt="Uploaded Image" width="100px"> </td>
                
                <td> <a href="{{ route('part.edit', ['id' => $row->id]) }}"> <button class="btn btn-primary" >Edit</button> </a> <span> <button class="btn btn-danger" >DELETE</button> </span>  
                </td>
          
            </tbody>
            @endforeach
        </table>
    </main>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


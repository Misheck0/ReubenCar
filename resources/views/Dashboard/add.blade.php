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
              <span data-feather="file" ></span>
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
            <a class="nav-link" href="{{route("logout")}}">
              <span data-feather="layers"></span>
              Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @if(session('success'))
    <p>{{ session('success') }}</p>

    @endif
        <div class="form-container">
            <form action="{{route("add-item")}}" method="post" enctype="multipart/form-data"> 
                @csrf
                <div class="form-group"> 
                  <label for="selection">Choose a make</label>
                 
                  <select class="form-control" name="make" required >
                    <option  value="BMW">BMW </option> 
                    <option value="Toyota">Toyota</option> 
                    <option value="Jeep">Jeep</option> 
                   
                    </select>
                  </div> 
                <div class="form-group"> 
            <label for="partname" class="form-label"> Car name:</label>
            <input class="form-control" type="text" name="car_name" id="partname" placeholder="part name" required>
          </div>
            

            <div class="form-group"> 
              <label for="quatity" class="form-label"> Engine type:</label>
              <input class="form-control" type="text" name="Entype" id="Pname" placeholder="provide the Engine type" required>
  
              
            </div>

            <div class="form-group"> 
              <label for="partname" class="form-label"> Price:</label>
              <input class="form-control" type="int" name="price" id="price" placeholder="price" required >
             

            </div>
           
         
            <div class="form-group"> 
              <label for="text">Description </label>
              <textarea name="context" class="form-control" rows="2">

              </textarea>

            </div>
           
            <!-- 
            <label for="chasis" class="form-label"> Chasis number:</label>
            <input  type="text" name="date" id="date" >-->
               
               <div class="form-group"> 
                <label for="img1" class="form-label" > first Image:</label>
                <input  type="file" name="img1" id="img1">

               </div>
               <div class="form-group"> 
                <label for="img1" class="form-label" > Second Image:</label>
                <input  type="file" name="img2" id="img2">

               </div>
         
    <br>  
            <input type="submit" value="Add" class="btn btn-primary" >
            </form>
        </div>
    </main>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laptop sell & purchase store</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
      .img{
        aspect-ratio: 1;
      }
    </style>
  </head>
  <body>
    <div class="parent">
    <nav class="navbar navbar-expand-lg bg-opacity-10">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlut68gJIG7KO0gKs5fAb8jp85wuC4LgCWsFxjkYBL&s" width="70px" alt=""> </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{'/sendemail'}}">Contact Us</a>
                {{-- <a class="nav-link" href=" {{ url('insert') }} ">Shop</a> --}}
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li><a class="dropdown-item" href="#">Featured</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Support</a></li>
                </ul>
              </li>
              <li class="nav-item" >
                <a class="nav-link btn btn-outline-secondary" href="{{ route('register')}}">Register</a>
             </li>
              <li class="nav-item" >
                <a class="nav-link btn btn-outline-secondary" href="{{ route('login')}}">Login</a>
               
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>




    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://cdn.mos.cms.futurecdn.net/qBfGdkRvjJszWvRJGJfdhS-1200-80.jpg.webp" class="d-block w-100" height="550px" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://cdn.mos.cms.futurecdn.net/konRkSKsSzt8koc4XcPUdm-1200-80.jpeg" class="d-block w-100" height="550px" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://cdn.mos.cms.futurecdn.net/iSg2eQYoNyrziGffBqEhzS-1200-80.jpg" class="d-block w-100" height="550px" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




    <h1 style="text-align: center ;">Laptops</h1>
    <div class="container text-center">
      <div class="row">
        @foreach($app as $items)
        <div class="col">
          <form action="welcome" method="get" enctype="multipart/form-data"> 
            <input type="hidden" name="pid" value="{{$items['Id']}}"/>
            <div class="card" style="width: 18rem;">
              <img src="{{asset('image/'. $items->PImage)}}" class="card-img-top img" name="image">
              <div class="card-body">
                <h5 class="card-title"><input type="hidden" name="LName" value="{{$items['LName']}}"/>{{$items['LName']}}</h5>
                <p class="card-text"><input type="hidden" name="Lgeneration" value="{{$items['Lgeneration']}}"/>{{$items['Lgeneration']}}
                  <br><span style="font-weight:bold ">RS:<input type="hidden" name="Pprice" value="{{$items['Pprice']}}"/>{{$items['Pprice']}} &nbsp; only</span></p>
                <a href="/single/{{$items->Id}}" class="btn btn-primary">Shop now</a>
              </div>
            </div>
          </form>
        </div>
        @endforeach
      </div>
    </div>





   

 







  <!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-dark"
          style="background-color: #ECEFF1"
          >
    <!-- Section: Social media -->
    <section
             class="d-flex justify-content-between p-4 text-white"
             style="background-color: #21D192"
             >
      <!-- Left -->
      <div class="me-5">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold">Laptop sell & purchase store</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              Here, you can sell or purchase any type of laptop with good qulity.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Products</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Apple laptops</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Hp laptops</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Dell laptops</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Lenovo laptops</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Useful links</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
              <a href="#!" class="text-dark">Your Account</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Become an Affiliate</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Shipping Rates</a>
            </p>
            <p>
              <a href="#!" class="text-dark">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-4 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="fas fa-home mr-3"></i> Pakistan : Rawalpindi</p>
            <p><i class="fas fa-envelope mr-3"></i> umair@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> 0323-7469306</p>
            <p><i class="fas fa-print mr-3"></i> +92 39887923</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
  
      <a class="text-dark" href="https://mdbootstrap.com/"></a>
        
    </div>
  
  </footer>

</div>
<!-- End of .container -->


  </body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  

</html>




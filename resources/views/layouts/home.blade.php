<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ngao du vietnam</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @yield('custome_style')
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 js-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item nav-item-margin">
              <a class="nav-link text-white" href="#">Home</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link text-white" href="#">About</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link text-white" href="#">Tours</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link text-white" href="#">Hotels</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link text-white" href="#">Contact</a>
            </li>
            <li class="nav-item nav-item-margin">
              <a class="nav-link text-white" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Banner Image  -->
    <div
      class="banner-image w-100 vh-100 d-flex justify-content-center align-items-end"
    >      
      <div class="container" style="">
        <div class="row align-items-end" style="">
          <div class="col-lg-7">
            <div class="banner-text">
              <p class="banner-small-text">Welcome to NgaoduVietnam</p>
              <p class="banner-big-text">Perfect place <br> for your stories</p>
            </div>
            <div class="featured">
              <div class="row">
                <div class="col-12 left">
                  <div class="row">
                    <div class="col-4 featured-item">
                      <p>Featured</p>
                      <p><span class="featured-item-number">200+</span> tours</p>
                    </div>
                    <div class="col-4 featured-item">
                      <p class="align-middle"><span class="featured-item-number">100+</span> destination</p>
                    </div>
                    <div class="col-4 featured-item">
                      <p><span class="featured-item-number">8+</span> type of tour</p>
                    </div>
                  </div>
                </div>                
              </div>
            </div>
          </div>
          <div class="col-lg-5 search-form">
            <ul class="nav nav-tabs search-form-tab" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="tour-tab" data-bs-toggle="tab" data-bs-target="#tour" type="button" role="tab" aria-controls="tour" aria-selected="true">Tour</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="hotel-tab" data-bs-toggle="tab" data-bs-target="#hotel" type="button" role="tab" aria-controls="hotel" aria-selected="false">Hotel</button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="tour" role="tabpanel" aria-labelledby="tour-tab">
                <p class="tab-content-title">Discover beautiful Vietnam</p>
                <form>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-text form-group-icon" id="inputGroup-sizing-lg">
                        <i class="fas fa-map-marker-alt orange-color"></i>
                      </span>
                      <input type="text" class="form-control border-none" 
                      aria-label="Sizing example input" 
                      aria-describedby="inputGroup-sizing-lg"
                      value="Quatlam Beach, Giaothuy, Namdinh"
                      >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-text form-group-icon" id="inputGroup-sizing-lg">
                        <i class="far fa-calendar-alt orange-color"></i>
                      </span>
                      <input type="text" class="form-control border-none" 
                      aria-label="Sizing example input" 
                      aria-describedby="inputGroup-sizing-lg"
                      placeholder="Departure time"
                      >
                    </div>
                  </div>     
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-text form-group-icon" id="inputGroup-sizing-lg">
                        <i class="far fa-flag orange-color"></i>
                      </span>
                      <select class="form-select border-none" aria-label="Default select example">
                        <option selected>Type of tour</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group input-group-lg">
                      <span class="input-group-text form-group-icon" id="inputGroup-sizing-lg">
                        <i class="fas fa-user-friends orange-color"></i>
                      </span>
                      <select class="form-select border-none" aria-label="Default select example">
                        <option selected>Number of guests</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div>               
                  <button type="submit" class="btn-custom w-100">Search</button>
                </form>
              </div>
              <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                hotel
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  
    @yield('content')
   
    <footer class="container-fluid bg-dark">
      <div class="container w-100">
        <div class="row">
          <div class="col-lg-5">
            <div>
              <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
              </a>
            </div>
            <div class="media-icon-container">
              <span class="media-icon"><i class="fab fa-facebook"></i></span>
              <span class="media-icon"><i class="fab fa-instagram"></i></span>
              <span class="media-icon"><i class="fab fa-twitter"></i></span>
            </div>
          </div>
          <div class="col-lg-4 d-flex">
            <ul class="list-unstyled text-white me-5">
              <li class="p-4">Home</li>
              <li class="p-4">About</li>
              <li class="p-4">Tours</li>
              <li class="p-4">Hotels</li>
              <li class="p-4">Contact</li>
            </ul>
            <ul class="list-unstyled text-white">
              <li class="p-4">Partner with us</li>
              <li class="p-4">Terms & Conditions</li>
              <li class="p-4">Privacy Policy</li>
              <li class="p-4">Guest Policy</li>
            </ul>
          </div>
          <div class="col-lg-3 text-white">
            <div class="d-flex p-4 company-info">
              <i class="fas fa-map-marker-alt"></i>              
              <p>Lilama 10 Tower, 56 To Huu,
                Trung Van, Nam Tu Liem, Ha Noi</p>
            </div>
            <div class="d-flex p-4 company-info">
              <i class="far fa-envelope"></i>
              <p>hello@adamotravel.com</p>
            </div>
          </div>
        </div>
      </div>      
    </footer>
    <div class="w-100 d-flex copy-right justify-content-center align-items-center">
      <p class="text-white my-2">Copyright © We.travel.  All rights reserved</p>
    </div>

    <script src="{{ asset('js/app.js') }}" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
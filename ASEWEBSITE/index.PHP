<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Pearl of Ceylon - Home</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
      <link rel="stylesheet" href="Main.css">
      <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
          -webkit-appearance: none;
          margin: 0;
        }

        /* Firefox */
        input[type=number] {
          -moz-appearance: textfield;
        }
        
      </style>
    </head>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
        <nav>
          <div id="logo">
            <a href="index.PHP"><img src="images/Logo/Pearl of Ceylon.jpg" alt="logo" onclick="navToggler('')"></a>
          </div>
        </nav>
          
        <!-- Navbar Collapse Section -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Pearl of Ceylon</a>
          
          <!-- Navigation Links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active Sme-2" aria-current="page" href="#">Home</a> <!-- Home Link -->
            </li>
            <li class="nav-item">
              <a class="nav-link active me-2" href="#">Rooms</a> <!-- Rooms Link -->
            </li>
            <li class="nav-item">
              <a class="nav-link active me-2" href="#">Facilities</a> <!-- Facilities Link -->
            </li>
            <li class="nav-item">
              <a class="nav-link  active me-2" href="#">Contact Us</a> <!-- Contact Us Link -->
            </li>
            <li class="nav-item">
              <a class="nav-link  active me-2" href="#">About</a>  <!-- About Link -->
            </li>
            <li class="nav-item">
              <a class="nav-link  active me-2" href="#">Hotels</a>  <!-- Branches Link -->
            </li>
          </ul>

          <div class = "d-flex">

            <!-- Login Button: Triggers Login Modal -->
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button>

            <!-- Register Button: Triggers Register Modal -->
            <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
              Register
            </button>
          </div>
        </div>
        <!-- End Navbar Collapse -->
      </div>
    </nav>
  <body class="bg-light">
    <!-- Login Page -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center"><i class = "bi bi-person-circle fs-3 me-2"></i> User Login</h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none">
              </div>
              <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" class="form-control shadow-none">
              </div>
              <div class ="d-flex align-items-center justify-content-between mb-2">
                <button type = "submit" class = "btn btn-dark shadow-none">LOGIN</button>
                <a href="javascript: void(0)" class ="text-secondary text-decoration-none">Forgot Password?</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    <!-- Register Page -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <form>
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center"> <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration</h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base"> 
                Note: Your details must match with your ID ( Idetity card, Passport, Driving License, etc.)
                that will be required during check-in.
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadow-none">
                  </div>
                   <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Picture</label>
                    <input type="file" class="form-control shadow-none">
                  </div>
                  <div class="col-md-12 p-0 mb-3">
                    <label class="form-label">Address</label>
                    <textarea class="form-control shadow-none" rows="1"></textarea>
                  </div>
                   <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Date of birth</label>
                    <input type="date" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control shadow-none">
                  </div>
                </div>
              </div>
              <div class="text-center">
                <button type = "submit" class = "btn btn-dark shadow-none">REGISTER</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Start Images -->
    <div class="container-fluid ">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/1.png" class="w-100 d-block">
            <div class="slide-content">
              <h1>Welcome to Pearl of Ceylon</h1>
              <p>Experience luxury and comfort with seamless reservations.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/2.png"class="w-100 d-block">
            <div class="slide-content">
              <h1>Luxurious Suites</h1>
              <p>Stay for a week or month in our premium suites.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/3.png"class="w-100 d-block">
            <div class="slide-content">
              <h1>Top Amenities</h1>
              <p>Enjoy our restaurant, room service, and club facilities.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/4.png"class="w-100 d-block">
            <div class="slide-content">
              <h1>Comfortable Rooms</h1>
              <p>Relax in our well-appointed standard rooms.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/5.png"class="w-100 d-block">
            <div class="slide-content">
              <h1>Group Bookings</h1>
              <p>Special rates for travel companies and groups.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="images/6.png"class="w-100 d-block">
            <div class="slide-content">
              <h1>Unforgettable Stays</h1>
              <p>Make memories at Starlight Hotel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Check avaliability form-->
    <div class="container availability-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-5 rounded">
          <h5>Check Booking Avaliability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Check-Out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Adult</label>
                <select class="form-select shadow-none">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label" style="font-weight: 500;">Children</label>
                <select class="form-select shadow-none">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-1 mt-1">
                <button type="submit" class="btn text-white text-center shadow-none custom-bg">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Our Rooms-->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font">OUR ROOMS</h2>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
            <img src="images/Rooms/1.jpg" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">Rs.4500 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  3 sofa
                </span>
              </div>
              <div class="class facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  WiFi
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  Room heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
              
            </div>

          </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
            <img src="images/Rooms/1.jpg" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">Rs.4500 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  3 sofa
                </span>
              </div>
              <div class="class facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  WiFi
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  Room heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
              
            </div>

          </div>

        </div>
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
            <img src="images/Rooms/1.jpg" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">Rs.4500 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  3 sofa
                </span>
              </div>
              <div class="class facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  WiFi
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  AC
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap"> 
                  Room heater
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
              
            </div>

          </div>

        </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
        </div>
      </div>
    </div>
    
    <!-- Our Facilities-->
    <h2 class="pt-4 mb4 text-center fw-bold h-font p-3 m-0">OUR FACILITIES</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/features/wifi.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
      </div>
    </div>
    <br>
    <!-- Testimonials -->
    <section id ="testimonaial-section">
      <h2 class="tpt-4 mb4 text-center fw-bold h-font p-3 m-0 ">TESTIMONAIALS</h2>
      <div class="text-center mt-4">
        <div class="testimonials">
          <div class='testi'>
            <span class='testi-span'>
              <img src='images/Testimonails/1.jpg' class='testi-img'>
              <h2 class="p-3 text-white">Ravindu Egodawatte Said,</h2>
            </span>
            <p class='testi-p text-white'><strong>``</strong>A guest described their stay as a step back in time, 
            with the colonial tea planter bungalow offering stunning views of emerald tea fields. 
            They loved the personalized butler service, tea-infused dinners, and the guided Dunkeld Tea Factory tour, 
            calling it a perfect blend of luxury and Sri Lankan heritage."<strong>``</strong></p>
          </div>
          <div class='testi'>
            <span class='testi-span'>
            <img src='images/Testimonails/2.jpg' class='testi-img'>
            <h2 class="p-3 text-white">Kavishka Malsika Said,</h2>
            </span>
            <p class='testi-p text-white'><strong>``</strong>A guest was enchanted by the 17th-century Dutch colonial architecture and polished teak interiors. 
            They enjoyed the serene pool and Sri Lankan Healing Ritual at the spa, 
            noting how the hotels location within the UNESCO-listed fort immersed them in the islands historical charm.<strong>``</strong></p>
          </div>
          <div class='testi'>
            <span class='testi-span'>
              <img src='images/Testimonails/3.jpg' class='testi-img'>
              <h2 class="p-3 text-white">Deshan Shavinda Said,</h2>
            </span>
            <p class='testi-p text-white'><strong>``</strong>A couple praised the cliff-top villas with private infinity pools and ocean views, 
            noting the exceptional "Chef Table" dining experience. They appreciated the resorts proximity to Galle Fort and whale-watching spots, 
            making it a luxurious base for exploring the south coasts vibrant culture 
            A true master of the craft.<strong>``</strong></p>
          </div>
          <div class='testi'>
            <span class='testi-span'>
              <img src='img/Hamish.jpeg' class='testi-img'>
              <h2 class="p-3 text-white">Jagath Chaturanga Said,</h2>
            </span>
            <p class='testi-p text-white'><strong>``</strong>A traveler raved about the unique cocoon-shaped tents near Yala National Park, 
            highlighting the thrilling leopard-spotting game drives. 
            They found the staffs genuine hospitality and the eco-conscious design reflective of Sri Lankas wild beauty,
            calling it an unforgettable adventure.<strong>``</strong></p>
          </div>
        </div>
        <a href="testimonials" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> View More Testimonials >>></a>
      </div>
    </section>

    <!--Social_Media-->
    <section class="col-lg-4 p-4 ">
      <div">
        <h5 class="mb-3">Follow us on social media</h5>
        <a href="https://twitter.com" class="d-inline-block  text-decoration-none mb-3">
          <i class="bi bi-twitter me-1"></i>Twitter
        </a><br>
        <a href="https://www.facebook.com" class="d-inline-block  text-decoration-none mb-3">
          <i class="bi bi-facebook me-1"></i>Facebook
        </a><br>
        <a href="https://www.instagram.com" class="d-inline-block text-decoration-none">
          <i class="bi bi-instagram me-1"></i>Instagram
        </a><br>
      </div>
    </section>

    <h6 class="text-center bg-dark text-white p-3 m-0">2025 Pearl of Ceylon System. All rights reserved.</h6>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", 
      {
      spaceBetween: 0,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteractionn: false,
        
        }
      });
    </script>
  </body> 
</html>
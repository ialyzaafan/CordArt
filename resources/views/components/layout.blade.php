
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Cord-Art</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="https://corddigital.com/images/favicon.png" rel="icon">
    <link href="https://corddigital.com/images/favicon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
  
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Template Main CSS File -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
  
  </head>

<body>
    <div class="home-page">
    
    
        <header class="header">
          <nav class="navbar-expand-lg navbar-light bg-light fixed-top slideInDown navbar ">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Graphics
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Logos</a></li>
                        <li><a class="dropdown-item" href="#">Brand Identity</a></li>
                        <li><a class="dropdown-item" href="">Printing & Packaging</a></li>
                        <li><a class="dropdown-item" href="#">Social media pics</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Video
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">VFX</a></li>
                        <li><a class="dropdown-item" href="#">Video Shooting</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Audio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Audio Book</a></li>
                        <li><a class="dropdown-item" href="#">Composing & Soundtracks</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Photography
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Commercial</a></li>
                        <li><a class="dropdown-item" href="#">Decor</a></li>

                    </ul>
                </li>
                </ul>

                <div class="m-auto">
                  <a class="navbar-brand" href="#">
                      <img class="lazy" src="./assets/logo-small.png" alt />

                  </a>
              </div>
                <ul class="d-flex navbar-nav me-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item">
                    <a id="pop-link" class="nav-link active pop-link" aria-current="page" href="#">Send Message</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Call US</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">info@corddigital.com</a>
                </li>

                </ul>
              </div>
            </div>
          </nav>
        </header>



        {{ $slot }}











    </div>


<x-footer />


<x-popup />



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
<x-preloader />
</html>
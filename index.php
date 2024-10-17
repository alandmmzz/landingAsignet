<?php
/**
 * The base (and only) template
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

$blank_show_footer = get_theme_mod( 'blank_show_copyright', true );
$blank_show_header = get_theme_mod( 'header_text', false );
$blank_description = get_bloginfo( 'description', 'display' );

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" />
    <title>Asignet</title>
    <style>
      @font-face {
        font-family:"Acid-Grotesk-Light";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FFF-AcidGrotesk-Light-TRIAL.otf");
      }
      @font-face {
        font-family: "Acid-Grotesk-Regular";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FFF-AcidGrotesk-Regular-TRIAL.otf");
      }
      @font-face {
        font-family: "Acid-Grotesk-Bold";
        src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/FFF-AcidGrotesk-Bold-TRIAL.otf");
      }
    </style>
  </head>

  <body class="bg-light">

    <!-- HEADER -->
    <header class="sticky-top boxShadow-01 bg-light">
      <div class="row d-flex align-items-center justify-content-between justify-content-md-center bg-light m-0">

        <div class="d-none col-auto d-md-flex justify-content-center align-items-center gap-0 pt-3 pb-3 ps-lg-4 pe-lg-4 rounded-3 ">
          <button class="navItem btn btn-light rounded-3" type="button">
            <img height="30px" width="auto" src="<?php echo get_template_directory_uri();?>/assets/img/asignet-logo.png" alt="Asignet logo">
          </button>
          <button class="navItem btn btn-light rounded-3" type="button">Solutions</button>
          <button class="navItem btn btn-light rounded-3" type="button">About</button>
          <button class="navItem btn btn-secondary rounded-3 ms-4 me-4" type="button">Request a demo</button>
        </div>
        
        <div class="d-md-none d-flex justify-content-between ps-4 pe-3">
          <button class="btn btn-light rounded-3" type="button">
            <img height="26px" width="auto" src="<?php echo get_template_directory_uri();?>/assets/img/asignet-logo.png" alt="Asignet logo">
          </button>
          <button class="btn btn-light rounded-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasHeader" aria-controls="offcanvasHeader">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </button>
        </div>

      </div>
    </header>

    <!-- MAIN PAGE -->
    <main>
      <!-- First Row -->
      <div class="row d-flex justify-content-center w-100 mt-5">
        <div class="col-10">
          <h1 class="fs-1 fw-bold mb-0">
            Cut Costs.
          </h1>
          <span class="fs-1 fw-bold">
            Manage your
          </span>
            
          <span class="word-carousel">
            <div class="word-carousel-wrapper fs-1 fw-bold">
                <p class="word-carousel-item">cloud</p>
                <p class="word-carousel-item">mobile</p>
                <p class="word-carousel-item">software</p>
                <p class="word-carousel-item">hardware</p>
                <!-- Duplicamos las palabras para crear el efecto continuo -->
                <p class="word-carousel-item">cloud</p>
                <p class="word-carousel-item">mobile</p>   <p class="word-carousel-item">software</p>
                <p class="word-carousel-item">hardware</p>
            </div>
        </span>
          <span class="payments fs-1 fw-bold">
            
            payments.
          </br>
            Better.
          </span>

          <div class="mt-5 mb-5 d-flex gap-3">
            <button class="btn btn-primary rounded-3" type="button">Get Started</button>
            <button class="btn btn-secondary rounded-3" type="button">Request a demo</button>
          </div>
          <img class="rounded w-100 boxShadow-01 mt-5" src="<?php echo get_template_directory_uri();?>/assets/img/we-work-with-four-of-them.png" />
        </div>
      </div>
      
      <!-- Second row -->
      <div class="row d-flex justify-content-center w-100 mt-5">
        <div class="col-10">
          <div class="d-flex justify-content-start gap-3">
            <span class="fs-3">Trusted by the World’s largest Organizations</span>
          </div>
          <div id="carouselTwo" class="d-md-none carousel slide mt-5 mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="d-flex justify-content-evenly gap-5">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/coca-cola-logo.png" class="rounded-3 w-25" />
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/HSBC-logo.png" class="rounded-3 w-25" />
                </div>
              </div>
              <div class="carousel-item gap-5">
                <div class="d-flex justify-content-evenly gap-5">
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/scjohnson-logo.png" class="rounded-3 w-25" />
                  <img src="<?php echo get_template_directory_uri();?>/assets/img/danfoss-logo.png" class="rounded-3 w-25" />
                </div>
              </div>
            </div>
          </div>
          <div class="d-none d-md-flex row justify-content-center align-items-center gap-5 mt-5 mb-5">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/coca-cola-logo.png" class="partner-logo col-2 rounded" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/HSBC-logo.png" class="partner-logo col-2 rounded" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/scjohnson-logo.png" class="partner-logo col-2 rounded" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/danfoss-logo.png" class="partner-logo col-2 rounded" />
          </div>
        </div>
      </div>

      <!-- deprecated -->
      <!-- <div class="row d-flex justify-content-center w-100">
        <div>
          <div class="d-flex justify-content-center align-content-center mt-5 mb-5 p-2">
            <p class="fs-2 text-center">"Insert quote from Microsoft, Meta, Google"</p>
          </div>
          <div class="d-flex justify-content-center mb-5">
            <div class="d-flex justify-content-center align-items-center me-4">
              <img  src="<?php echo get_template_directory_uri();?>/assets/img/dog.webp" height="50px" width="50px" class="rounded-circle" alt="">
            </div>
            <div>
              <p class="fs-5 mb-0">Employee name</p>
              <p class="fs-5 mb-0">Role at the Company</p>
            </div>
          </div>
        </div>
      </div> -->

      <!-- Third row -->
    <div class="row d-flex justify-content-center w-100">
      <div class="col-10">
        <!-- deprecated -->
        <!-- <div id="word-emphasis-carousel" class="d-flex justify-content-start gap-5">
          <div class="fs-3 activeCarousel text-center"><a data-bs-target="#carouselOne" data-bs-slide-to="0">Cut Costs.</a></div>
          <div class="fs-3 text-secondary text-center"><a data-bs-target="#carouselOne" data-bs-slide-to="1">Manage your payments.</a></div>
          <div class="fs-3 text-secondary text-center"><a data-bs-target="#carouselOne" data-bs-slide-to="2">Better.</a></div>
        </div> -->
        <div id="carouselOne" class="carousel slide mt-3" data-bs-ride="carousel">
          <div class="carousel-inner p-1">

            <div class="carousel-item boxShadow-01 rounded-4 p-5 active">
              <p class="fs-3 ps-5">Cut Cost Feature.</p>
              <div class="rounded d-flex justify-content-center ps-5 pe-5">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/gray-solid.svg" class="d-block rounded-4 w-100 opacity-25" />
                <p class="img-overlay fs-3">8% - 15% annual TEM  savings on average.</p>
              </div>
            </div>

            <div class="carousel-item boxShadow-01 rounded-4 p-5 ">
              <p class="fs-3 ps-5">Manage your payments.</p>
              <div class="rounded d-flex justify-content-center ps-5 pe-5">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/gray-solid.svg" class="d-block rounded-4 w-100 opacity-25" />
                <p class="img-overlay fs-3">8% - 15% annual TEM  savings on average.</p>
              </div>
            </div>

            <div class="carousel-item boxShadow-01 rounded-4 p-5">
              <p class="fs-3 ps-5">Better.</p>
              <div class="rounded d-flex justify-content-center ps-5 pe-5">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/gray-solid.svg" class="d-block rounded-4 w-100 opacity-25" />
                <p class="img-overlay fs-3">8% - 15% annual TEM  savings on average.</p>
              </div>
            </div>

          </div>
          <div class="d-flex justify-content-center gap-4 mt-4">
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselOne" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselOne" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselOne" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
      
      <!-- Fourth row -->
      <div class="row d-flex justify-content-center w-100">
        <div class="col-10">
          <div class="d-flex justify-content-start gap-3">
            <span class="fs-3">Certified by Leading Industry Standards</span>
          </div>
          <div class="row d-flex justify-content-evenly align-items-center industry-standards-container gap-3 mt-5 logosCertificacion">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/industry-starndard-1.png" alt="" class="col-2 rounded industry-standards" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/industry-starndard-2.png" alt="" class="col-2 rounded industry-standards" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/industry-starndard-3.png" alt="" class="col-2 rounded industry-standards" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/industry-starndard-4.png" alt="" class="col-2 rounded industry-standards" />
            <img src="<?php echo get_template_directory_uri();?>/assets/img/industry-starndard-5.png" alt="" class="col-2 rounded industry-standards" />
          </div>
        </div>
      </div>

      <!-- Fifth row -->
      <div class="row d-flex justify-content-center w-100">
        <div class="col-10">
          <p class="fs-2 fw-bold gradientTitle mt-5 mb-2">
            Special Offer!
          </p>
          <p class="fs-5 mb-1">
            Get a fully functional  Proof of Concept, <strong>on us.</strong> 😉
          </p>
          <p class="fs-5 mb-3">
            You can try it out while <strong>still maintaining your current platform.</strong>
          </p>
          <div class="boxShadow-01">
            <img class="rounded w-100"  src="<?php echo get_template_directory_uri();?>/assets/img/dog.webp">
          </div>
        </div>
      </div>
    </main>

    <!-- OFF CANVAS HEADER -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasHeader" aria-labelledby="#offcanvasHeader">
      <div class="offcanvas-header d-flex justify-content-end m-2">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between disabled">Home
            <a class="text-reset" href="./index.html"></a>
          </li>
          <li class="list-group-item d-flex justify-content-between">Product
            <a class="text-reset" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </li>
          <li class="list-group-item d-flex justify-content-between">Solutions
            <a class="text-reset" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </li>
          <li class="list-group-item d-flex justify-content-between">About
            <a class="text-reset" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </li>
          <li class="list-group-item d-flex justify-content-between">Request a demo
            <a class="text-reset" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
              </svg>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- FOOTER -->
    <footer class="bg-light mb-5 mt-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-3 d-flex justify-content-start">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/asignet-logo-full.png" alt="Asignet Logo" height="40px">
          </div>

          <div class="col-md-6 text-center">
            <p class="mb-0 fs-6">
              © Copyright 2024 | All Rights Reserved | 
              <a href="#">Privacy Policy</a> | 
              <a href="#">Terms of Service</a> | 
              <a href="#">Information Security Policy</a>
            </p>
          </div>

          <div class="col-md-3 d-flex justify-content-end gap-3">
            <a href="#">📞</a>
            <a href="#">💌</a>
            <a href="#">🔗</a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const carousel = document.querySelector('#carouselOne');
        const divs = document.querySelectorAll('#word-emphasis-carousel div');

        // Función para actualizar las clases de los spans según el slide activo
        const updateSpans = (activeIndex) => {
            divs.forEach((div, index) => {
                if (index === activeIndex) {
                    div.classList.add('activeCarousel');
                    div.classList.remove('text-secondary');
                } else {
                    div.classList.remove('activeCarousel');
                    div.classList.add('text-secondary');
                }
            });
        };

        // Escuchar el evento 'slid.bs.carousel' para detectar el cambio de diapositiva
        carousel.addEventListener('slid.bs.carousel', function(event) {
            const activeIndex = event.to; // Obtiene el índice de la diapositiva activa
            updateSpans(activeIndex);
        });
      });
    </script>

  </body>
</html>
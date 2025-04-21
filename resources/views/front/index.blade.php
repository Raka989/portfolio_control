<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>JohnDoe Landing page | Free Bootstrap 4.3.x landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
    <head>
        ...
        <link rel="stylesheet" href="assets/css/johndoe.css">

        <!-- Custom Service Section Styles -->

        <head>
            ...
            <link rel="stylesheet" href="assets/css/johndoe.css">

            <!-- Custom Service Section Styles -->
            <style>
                /* Se/* RGB Animated Border on Hover */
.service-card {
  position: relative;
  background: #fff;
  border-radius: 8px;
  overflow: hidden;
  transition: transform 0.3s ease;
  z-index: 0;
}
.service-card:hover {
  transform: scale(1.03);
}

/* The glowing gradient border */
.service-card::before {
  content: "";
  position: absolute;
  top: -2px; left: -2px; right: -2px; bottom: -2px;
  background: linear-gradient(
    60deg,
    rgba(255,0,0,1),
    rgba(255,154,0,1),
    rgba(208,222,33,1),
    rgba(79,220,74,1),
    rgba(63,218,216,1),
    rgba(47,201,226,1),
    rgba(28,127,238,1),
    rgba(95,21,242,1),
    rgba(186,12,248,1),
    rgba(251,7,217,1),
    rgba(255,0,0,1)
  );
  background-size: 300% 300%;
  border-radius: 10px;
  z-index: -1;
  filter: blur(6px);
  opacity: 0;
  transition: opacity 0.3s ease;
}

/* On hover fade the glow in & animate */
.service-card:hover::before {
  opacity: 1;
  animation: rainbow 3s ease infinite;
}

/* Move the gradient */
@keyframes rainbow {
  0%   { background-position: 0% 50%; }
  50%  { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
rvices Section Wrapper */
                </style>


        </head>

    </head>


</head>
@include('front.layouts.header')
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>



    <div class="container-fluid">

    <!--Resume Section-->

    <section class="section bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 col-lg-3">
                    <div class="row ">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">230</h1>
                            <p class="text-light mb-1">Hours Worked</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">3</h1>
                            <p class="text-light mb-1">Project Finished</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">3</h1>
                            <p class="text-light mb-1">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="row">
                        <div class="col-5 text-right text-light border-right py-3">
                            <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                        </div>
                        <div class="col-7 text-left py-3">
                            <h1 class="text-danger font-weight-bold font40">1</h1>
                            <p class="text-light mb-1">Coffee Drinked</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="service" class="section">
        <div class="container">
          <h2><span class="text-danger">My</span> Services</h2>
          <div class="row">

            <!-- Service 1 -->
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card service-card h-100 border-0">
                <div class="card-header">
                  <i class="ti-paint-bucket text-danger icon-xl bounce"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Creative Design</h5>
                  <p class="card-text">Crafting visual identities and UI/UX designs that captivate your audience and elevate your brand.</p>
                </div>
              </div>
            </div>

            <!-- Service 2 -->
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card service-card h-100 border-0">
                <div class="card-header">
                  <i class="ti-layout-tab text-danger icon-xl bounce"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Web Development</h5>
                  <p class="card-text">Building responsive, high‑performance websites with Laravel, JavaScript, Bootstrap & jQuery for any device.</p>
                </div>
              </div>
            </div>

            <!-- Service 3 -->
            <div class="col-md-4 col-sm-6 mb-4">
              <div class="card service-card h-100 border-0">
                <div class="card-header">
                  <i class="ti-video-clapper text-danger icon-xl bounce"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Video Editing</h5>
                  <p class="card-text">Transforming raw footage into polished, story‑driven videos—perfect for YouTube, social reels, or promos.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>


    <!-- Portfolio Section -->

    <!-- End of portfolio section -->



    @include('front.layouts.footer')


	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>

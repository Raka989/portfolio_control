
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
</head>

@include('front.layouts.header')


<div class="section contact" id="contact">
    <div id="map" class="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <h4 class="contact-title">Send a message</h4>
                    <form action=" {{URL::to('contact_add')}}" enctype="multipart/form-data" method='post'>@csrf
                        <div class="form-group">
                            <input  class="form-control" type="text" name="name" placeholder="Name *" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email *" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id=" placeholder="Message *" rows="7" required></textarea>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="form-control btn btn-primary" >Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info-card">
                    <h4 class="contact-title">Get in touch</h4>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-mobile icon-md"></i>
                        </div>
                        <div class="col-10 ">
                            <h6 class="d-inline">Phone : <br> <span class="text-muted">+ 7505256152</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-map-alt icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Address :<br> <span class="text-muted">Khargapur Gomti Nagar Lucknow.</span></h6>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-1 pt-1 mr-1">
                            <i class="ti-envelope icon-md"></i>
                        </div>
                        <div class="col-10">
                            <h6 class="d-inline">Email :<br> <span class="text-muted">blkheart989@gmail.com</span></h6>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@include('front.layouts.footer')
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


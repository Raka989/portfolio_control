
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
<div id="about" class="row about-section">
    <div class="col-lg-4 about-card">
        <h3 class="font-weight-light">Who am I ?</h3>
        <span class="line mb-5"></span>
        <h5 class="mb-3">A Web Designer / Developer Located In  lovely India</h5>
        <p class="mt-20">Passionate web developer with expertise in creating user-friendly and dynamic web applications.</p>
        <a href="{{ url('pdf_view') }}">
            <button class="btn btn-outline-danger">
                <i class="icon-down-circled2"></i> Download My CV
            </button>
        </a>

    </div>
    <div class="col-lg-4 about-card">
        <h3 class="font-weight-light">Personal Info</h3>
        <span class="line mb-5"></span>
        <ul class="mt40 info list-unstyled">
            <li><span>Birthdate</span> : 25/04/1996</li>
            <li><span>Email</span> : blkheart989@gmail.com</li>
            <li><span>Phone</span> : 7505256152</li>
            <li><span>Skype</span> : Rakesh Yadav </li>
            <li><span>Address</span> :  Khargapur Gomti Nagar Lucknow </li>
        </ul>
        <ul class="social-icons pt-3">
            <li class="social-item"><a class="social-link" href="https://www.facebook.com/share/1CwoJs1rxF/"><i class="ti-facebook" aria-hidden="true"></i></a></li>
            {{-- <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li> --}}
            {{-- <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li> --}}
            <li class="social-item"><a class="social-link" href="https://www.instagram.com/rakesh_yaduvanshi9451?igsh=eDBudWQ2dmFrZWt5"><i class="ti-instagram" aria-hidden="true"></i></a></li>
            {{-- <li class="social-item"><a class="social-link" href="https://github.com/Raka989/my-portfolio"><i class="ti-github" aria-hidden="true"></i></a></li>
        </ul> --}}
    </div>
    <div class="col-lg-4 about-card">
        <h3 class="font-weight-light">My Expertise</h3>
        <span class="line mb-5"></span>
        <div class="row">
            <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
            {{-- <div class="col-10 ml-auto mr-3">
                <h6>UX Design</h6>
                <p class="subtitle"> exercitat Repellendus,  corrupt.</p>
                <hr>
            </div> --}}
        </div>
        <div class="row">
            <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
            <div class="col-10 ml-auto mr-3">
                <h6>Web Development</h6>
                <p class="subtitle">I specialize in full-stack web development with expertise in PHP and the Laravel framework, coupled with strong front-end skills in HTML5, CSS3, and JavaScript. I am proficient in building responsive websites using Bootstrap and jQuery, and I have experience in database management using MySQL. I also excel in version control and am highly familiar with Git and GitHub for collaborative coding.".</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-1 text-danger pt-1"><i class="ti-stats-up icon-lg"></i></div>
            <div class="col-10 ml-auto mr-3">
                <h6>Video Editing</h6>
                <p class="subtitle">"Skilled in video editing, with proficiency in editing software like Adobe Premiere Pro, Final Cut Pro, and DaVinci Resolve. Specialize in creating engaging video content for social media, advertisements, and corporate projects, ensuring high-quality production from concept to final cut.".</p>
                <hr>
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


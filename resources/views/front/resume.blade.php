<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Resume of Rakesh Yadav - Web Developer & Designer.">
    <meta name="author" content="Rakesh Yadav">
    <title>Resume | Rakesh Yadav</title>

    <!-- Font Icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Main Styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">

    <style>
        .section {
            padding: 80px 0;
        }
        .card {
            position: relative;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            z-index: 0;
            overflow: hidden;
            border-radius: 12px;
            min-height: 100%;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(255, 255, 255, 0.1);
        }
        .card::before {
            content: "";
            position: absolute;
            top: -2px; left: -2px; right: -2px; bottom: -2px;
            background: linear-gradient(45deg, #ff4d4d, #ffa64d, #33ff99, #33ccff, #cc66ff, #ff66b3, #ff4d4d);
            background-size: 400% 400%;
            border-radius: 15px;
            z-index: -1;
            filter: blur(10px);
            opacity: 0;
            transition: opacity 0.4s ease;
        }
        .card:hover::before {
            opacity: 1;
            animation: glowingBorder 6s ease infinite;
        }
        @keyframes glowingBorder {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .card:hover .ti,
        .card:hover i {
            animation: rotateIcon 1.2s ease-in-out infinite alternate;
        }
        @keyframes rotateIcon {
            0% { transform: rotate(0deg) scale(1); }
            100% { transform: rotate(360deg) scale(1.2); }
        }
    </style>
</head>

<body>
@include('front.layouts.header')

<section class="section" id="resume">
    <div class="container">
        <h2 class="mb-5"><span class="text-danger">My</span> Resume</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

            <!-- Expertise -->
            <div class="col d-flex">
                <div class="card w-100">
                    <div class="card-header">
                        <h4 class="mt-2">Expertise</h4>
                        <span class="line"></span>
                    </div>
                    <div class="card-body">
                        <h6 class="title text-danger">2025 - Present</h6>
                        <p>UX Developer</p>
                        <p class="subtitle">I specialize in full-stack web development with expertise in Laravel, PHP, HTML, CSS, JavaScript, Bootstrap, jQuery and MySQL. Experienced in Git/GitHub for version control.</p>
                        <hr>
                        <h6 class="title text-danger">2024</h6>
                        <p>Front-end Developer</p>
                        <p class="subtitle">Focused on intuitive and responsive interfaces using modern front-end technologies like HTML, CSS, and JavaScript.</p>
                        <hr>
                        <h6 class="title text-danger">2023 - 2024</h6>
                        <p>Intern at Promosys Technology</p>
                        <p class="subtitle">Worked on real-world projects using Laravel, PHP, and JavaScript. Gained practical experience and improved problem-solving skills.</p>
                    </div>
                </div>
            </div>

            <!-- Education -->
            <div class="col d-flex">
                <div class="card w-100">
                    <div class="card-header">
                        <h4 class="mt-2">Education</h4>
                        <span class="line"></span>
                    </div>
                    <div class="card-body">
                        <h6 class="title text-danger">2020 - 2024</h6>
                        <p>B.E. in Computer Engineering</p>
                        <p class="subtitle">Completed my Bachelor's in 2024, building a solid foundation in software development and web technologies.</p>
                        <hr>
                        <h6 class="title text-danger">2017</h6>
                        <p>Intermediate (12th)</p>
                        <p class="subtitle">Passed 12th in 2017 with PCM subjects, scoring 80% from St. Peters Intercollege.</p>
                        <hr>
                        <h6 class="title text-danger">2014</h6>
                        <p>High School (10th)</p>
                        <p class="subtitle">Completed 10th with a CGPA of 7.4 which laid the foundation of my academic journey.</p>
                    </div>
                </div>
            </div>

            <!-- Skills + Languages -->
            <div class="col d-flex flex-column gap-4">
                <div class="card w-100">
                    <div class="card-header">
                        <h4 class="mt-2">Skills</h4>
                        <span class="line"></span>
                    </div>
                    <div class="card-body pb-2">
                        <h6>HTML5 & CSS3</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 97%"></div></div>
                        <h6>JavaScript</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 85%"></div></div>
                        <h6>PHP</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 80%"></div></div>
                        <h6>SQL</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 90%"></div></div>
                        <h6>Laravel</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 90%"></div></div>
                        <h6>Bootstrap</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 90%"></div></div>
                        <h6>jQuery</h6>
                        <div class="progress mb-3"><div class="progress-bar bg-danger" style="width: 90%"></div></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

@include('front.layouts.footer')

<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
<script src="assets/vendors/isotope/isotope.pkgd.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>
<script src="assets/js/johndoe.js"></script>
</body>
</html>

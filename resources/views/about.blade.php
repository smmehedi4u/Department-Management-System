<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Management System</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMQMR5j5N1vpBz4/5ggUuU0H4i78T6v5ws5r9Ph" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid main-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="80" height="80">
                <div class="ml-3 text-white">
                    <h3 style="font-size: 1.25rem;">Nigatola University of Engineering and Technology</h3>
                    <p class="mb-0" style="font-size: 1rem;">Computer Science and Engineering</p>
                </div>
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav text-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admission') }}">Admission</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </nav>

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row">

                    <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="section-title position-relative mb-4">
                            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About Us
                            </h6>
                            <h1 class="display-4">Campus & Education</h1>
                        </div>
                        <p>
                            Faridpur Engineering College (FEC) is a public undergraduate college in Faridpur,
                            Bangladesh. It was established in 2010. The college is just 2.7 km away from Faridpur city
                            Located at Dr. Kazi Motaher Hossain Road, Char Kamalapur, Baitul Aman, Faridpur. The
                            academic activities of the college are managed under the Faculty of Engineering and
                            Technology of Dhaka University and the administrative activities under the Directorate of
                            Technical Education. Every year, around 180 students get accepted to undergraduate programs
                            in Electrical and Electronic Engineering (EEE), Civil Engineering (CE) and Computer Science
                            and Engineering (CSE).
                        </p>
                        <div class="row pt-3 mx-0">
                            <div class="col-4 px-0">
                                <div class="bg-primary text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">25</h1>
                                    <h6 class="text-uppercase text-white">CS<span class="d-block">Courses</span>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-4 px-0">
                                <div class="bg-secondary text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">12</h1>
                                    <h6 class="text-uppercase text-white">Skilled<span
                                            class="d-block">Teachers</span></h6>
                                </div>
                            </div>
                            <div class="col-4 px-0">
                                <div class="bg-warning text-center p-4">
                                    <h1 class="text-white" data-toggle="counter-up">220+</h1>
                                    <h6 class="text-uppercase text-white">Happy<span class="d-block">Students</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                By combining education from both structured systems and this platform, students can
                                benefit from a more
                                well-rounded and comprehensive learning experience that allows for both structured
                                instruction and
                                personalized, self-directed learning. This can lead to a more effective and efficient
                                learning process,
                                where students can optimize their understanding of course material and acquire practical
                                skills relevant
                                to their professional and personal development.<br><br>

                                MEIRAS is a web-based platform that is flexible, accessible, and personalized.
                                Students can learn at their own pace, from anywhere with an internet connection.
                                The software offers a range of courses that are designed to help students develop
                                a variety of skills, from programming and graphic design to leadership and public
                                speaking.
                                It provides a comprehensive learning experience for students who are seeking to acquire
                                new
                                skills and knowledge. The platform also provides tools for tracking progress and
                                achievement,
                                allowing students to build a personalized learning portfolio that they can showcase to
                                potential
                                employers or educational institutions. Overall, MEIRAS offers a modern and convenient
                                solution
                                to the limitations of traditional classroom-based learning.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->



        <!-- Footer -->
        <footer class="footer text-center">
            <p>&copy; 2021 Nigatola University of Engineering and Technology DMS. All rights reserved.</p>
            <p>Email: fec@edu.bd | Phone: +880123456789</p>
            <div class="social-icons">
                <a href="#" class="text-primary mr-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-primary mr-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-primary"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

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

    <style>
        .main-container {
            width: 90%;
            /* Covers 90% of the viewport width */
            margin: 0 auto;
            /* Centers the container */
        }

        .bg-primary {
            background: #6777ef !important;
        }

        .border-primary {
            border-color: #6777ef !important;
        }

        .navbar-nav .nav-item {
            margin: 0 10px;
            /* Adds space between menu items */
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            /* Text color */
            font-weight: 500;
            /* Slightly bold */
            font-size: 1.1rem;
            /* Adjust font size */
            transition: color 0.3s, background-color 0.3s;
            /* Smooth transition */
            padding: 10px 15px;
            /* Padding around links */
            border-radius: 5px;
            /* Rounded corners for a softer look */
        }

        .navbar-nav .nav-link:hover {
            background-color: #ffffff;
            /* Background color on hover */
            color: #6777ef;
            /* Text color on hover */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            /* Subtle shadow */
        }

        .navbar-nav .active .nav-link {
            background-color: #ffffff;
            /* Active item background */
            color: #6777ef;
            /* Active item text color */
        }

        .hero-section {
            background-image: url("{{ asset('img/cover.jpeg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 400px;
            /* Ensures it occupies significant space */
        }

        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
        }

        .about-section {
            background-color: #f8f9fa;
        }

        .about-section h2 {
            font-size: 2.5rem;
        }

        .about-section .lead {
            font-size: 1.25rem;
            color: #555;
        }
    </style>
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



        <!-- Hero Section -->
        <section class="hero-section d-flex align-items-center justify-content-center"
            style="min-height: 600px; padding: 100px 0; background-color: #6777ef;">
            <div class="container text-center text-white">
                <h1 class="display-3">Welcome to NUET</h1>
                <p class="lead">Your journey to excellence in engineering starts here</p>
                <a href="{{ route('about') }}" class="btn btn-lg btn-light mt-4">Learn More</a>
            </div>
        </section>



        <!-- Academic Section -->
        <section class="academic-section py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-4 text-primary">Academic Programs</h2>
                    <p class="lead">Explore our comprehensive programs designed to cultivate skills and knowledge in
                        Computer Science and Engineering.</p>
                </div>

                <div class="row">
                    <!-- Undergraduate Programs -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-primary">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Undergraduate Program</h4>
                                <p class="card-text">
                                    Our Bachelor of Science in Computer Science and Engineering (BSc in CSE) program
                                    provides a strong foundation in computer science fundamentals, programming, and
                                    problem-solving skills essential for the tech industry.
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-chevron-right text-primary"></i> Core courses in algorithms,
                                        databases, and software engineering</li>
                                    <li><i class="fas fa-chevron-right text-primary"></i> Opportunities for internships
                                        and projects</li>
                                    <li><i class="fas fa-chevron-right text-primary"></i> Access to state-of-the-art
                                        labs and equipment</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Graduate Programs -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-primary">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Graduate Program</h4>
                                <p class="card-text">
                                    Our Master's program in CSE emphasizes research and advanced topics, preparing
                                    students for leadership roles in academia, industry, and beyond.
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-chevron-right text-primary"></i> Specialized courses in AI,
                                        cybersecurity, and data science</li>
                                    <li><i class="fas fa-chevron-right text-primary"></i> Research opportunities with
                                        expert faculty</li>
                                    <li><i class="fas fa-chevron-right text-primary"></i> Pathway to doctoral studies
                                        and innovation careers</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Research and Facilities -->
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-primary">
                            <div class="card-body">
                                <h4 class="card-title text-primary">Research & Facilities</h4>
                                <p class="card-text">
                                    The CSE Department is equipped with cutting-edge labs and resources to support both
                                    academic and applied research.
                                </p>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-chevron-right text-primary"></i> AI and Robotics Laboratory
                                    </li>
                                    <li><i class="fas fa-chevron-right text-primary"></i> Data Science and Machine
                                        Learning Center</li>
                                    <li><i class="fas fa-chevron-right text-primary"></i> Software Development and
                                        Testing Labs</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Academic Section -->
        <section class="academic-section py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-4 text-primary">Admission</h2>
                    <p class="lead">Explore our comprehensive programs designed to cultivate skills and knowledge in
                        Computer Science and Engineering.</p>
                </div>

                <!-- Research and Facilities -->
                <div class="col-md-12 mb-4">
                    <div class="card h-100 border-primary">
                        <div class="card-body">
                            <p class="card-text">
                                The CSE Department is equipped with cutting-edge labs and resources to support both
                                academic and applied research.Contrary to popular belief, Lorem Ipsum is not simply
                                random text. It has roots in a piece of classical Latin literature from 45 BC, making it
                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in
                                Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum
                                passage, and going through the cites of the word in classical literature, discovered the
                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus
                                Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                                book is a treatise on the theory of ethics, very popular during the Renaissance. The
                                first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                1.10.32.

                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those
                                interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero
                                are also reproduced in their exact original form, accompanied by English versions from
                                the 1914 translation by H. Rackham.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>



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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE Department Management System</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<style>
        .bg-primary {
            background: #6777ef !important;
        }


        .border-primary {
            border-color: #6777ef !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="/">
                <div style="display:flex">
                    <img src="{{asset("img/logo.png")}}" alt="" width="100" height="100">

                    <div class="ml-3">
                        <h3>Faridpur Engineering College</h3>
                        <p>Computer Science and Engineering</p>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <div class="ml-auto text-white">
                    <p>
                        <br> fec@edu.bd
                    </p>

                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("login")}}">Login</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div id="carouselExampleControls" class="carousel slide my-2" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/img3.jpeg')}}" height="250" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/img4.jpg')}}" height="250" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/img2.jpg')}}" height="250" class="d-block w-100" alt="...">
              </div>
            </div>
           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
          </div>



        <div class="card border-primary my-2">
            <div class="card-header bg-primary text-white">
                About Us
            </div>
            <div class="card-body">
                <h4 class="card-title">Welcome To FEC</h4>
                <p class="card-text">
                    <strong>Faridpur Engineering College is affiliated with University of Dhaka under the Faculty of Engineering and Technology.</strong>
                </p>
                <p class="card-text">
                    <strong>About Us:</strong> Brief Introduction

                    Faridur Engineering College is located about 2.7 kilometers away from the main city of Faridpur. Faridpur Engineering College is established to conduct B.Sc in Engineering degree in Bangladesh. Administrative activities controlled by Directorate of Technical Education (DTE), under Technical and Madrasha  Education Division (TMED), Ministry of Education.



                    This College is affiliated with the University of Dhaka under the  Faculty of Engineering & Technology for certification four (04) years B.Sc.(Engg.) degree. Its academic journey has launched in 2013 with two departments by 120 students. In the 2017-2018 Session, the College added another feather in its cap ‘Computer Science and Engineering’ (CSE) Department under the same University since then. The College now belongs to three departments:

                    <br/> 1.  Civil Engineering (CE) <br/>

                                                    2.  Electrical and Electronics Engineering (EEE)<br/>

                                                    3.  Computer Science and Engineering (CSE)<br/>



                    The College has 01 administrative buildings, 03 academic buildings, 01 multipurpose buildings, 01 bank- post office and cafeteria building. 03 residential halls provide students’ accommodation, one is for female students and another two are for males students. There are also a Mosque and a residential building for the Principal. The institute has a playing field and a library with academic-related books, a modern computer lab with fast-paced Internet access, and modern learning facilities, including sophisticated Labs/Workshops.


                </p>
            </div>
        </div>
        <div class="card text-white bg-primary">
            <div class="card-body mx-auto">
                Copyright © 2021 Faridpur Engineering College DMS.All rights reserved
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>

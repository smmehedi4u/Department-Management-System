<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE Department Management System</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

        <div class="card border-primary my-2">
            <div class="card-header bg-primary text-white">
                About Us
            </div>
            <div class="card-body">
                <h4 class="card-title">Welcome To FEC</h4>
                <p class="card-text">
                    <strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p class="card-text">
                    <strong>Vision:</strong> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </p>
                <p class="card-text">
                    <strong>Mission:</strong> We profoundly recognize the role of education in the development of a country. We also believe that young people from all sections of the society have the right to education. To fulfill our vision, we are aiming to bring quality education at the reach of the aspiring students by reliving them from the burden of excessive expenses of the higher education. Our mission also includes development of social values and humanism among the students by creating an appropriate environment of education.
                </p>
                <p class="card-text">
                    <strong>Founder:</strong> The founder of the University is Prof. Rasheda Khaleque who has a long experience in teaching and managing educational institutions. She is also the Chairman of the Board of Trustees of the Faridpur Engineering College.
                </p>
            </div>
        </div>
        <div class="card text-white bg-primary">
            <div class="card-body mx-auto">
                Copyright © 2021 Faridpur Engineering College DMS.All rights reserved
            </div>
        </div>
    </div>

</body>

</html>

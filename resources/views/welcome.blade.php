<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBIU Dormitory Management System</title>

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
                        <h3>North Bengal International University</h3>
                        <p>Dormitory Management System</p>
                    </div>
                </div>
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <div class="ml-auto text-white">
                    <p>
                        01789-908612, 01713-072270
                        <br> info@nbiu.edu.bd
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
                <h4 class="card-title">Welcome To NBIU</h4>
                <p class="card-text">
                    <strong>North Bengal International University</strong> (Bengali: নর্থ বেঙ্গল ইন্টারন্যাশনাল ইউনিভার্সিটি) was established on 15 September, 2013 after getting the permission from the Government of the Peoples Republic of Bangladesh. The Board of Trustees of NBIU comprises the prominent and vastly experienced figures from the education sector of the country. The Trustees are enriched with the professional experiences in both public and private sectors. All the Trustees are highly educated and belong to middle class educated families. The values and thoughts of the highly educated middle class society are, therefore, reflected in the vision and mission of the university.
                </p>
                <p class="card-text">
                    <strong>Vision:</strong> The vision of the university is to become a leading-edge educational institution of the country by providing high quality education to the young generation in order to equip them with the knowledge and skill necessary for the development of the country. It aims at attracting good students, faculty and staff from home and abroad.
                </p>
                <p class="card-text">
                    <strong>Mission:</strong> We profoundly recognize the role of education in the development of a country. We also believe that young people from all sections of the society have the right to education. To fulfill our vision, we are aiming to bring quality education at the reach of the aspiring students by reliving them from the burden of excessive expenses of the higher education. Our mission also includes development of social values and humanism among the students by creating an appropriate environment of education.
                </p>
                <p class="card-text">
                    <strong>Founder:</strong> The founder of the University is Prof. Rasheda Khaleque who has a long experience in teaching and managing educational institutions. She is also the Chairman of the Board of Trustees of the North Bengal International University.
                </p>
            </div>
        </div>
        <div class="card text-white bg-primary">
            <div class="card-body mx-auto">
                Copyright © 2021 North Bengal International University DMS.All rights reserved
            </div>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/style/main.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-login">
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <section class="section-main-page ">
        <div class="section-content">
            <div class="container-fluid">
                <div class="section-main-inner">
                    <div class="section-text text-new-arrival">
                        NEW ARRIVALS
                    </div>
                    <div class="section-text text-confort-chair">
                        CONFORT CHAIR
                    </div>
                    <p>Lorem ipsum dolor, sit amet, <br> consectetur adipisicing elit.</p>
                    <button class="btn btn-buy-now">
                        BUY NOW
                    </button>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ url('frontend/libraries/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>

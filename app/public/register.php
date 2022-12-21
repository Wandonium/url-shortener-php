<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,700;1,400&display=swap" rel="stylesheet" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="register.css" />
    <style>
        html, body {
            width: 100%;
            height: 100vh;
            background-color: rgb(150, 97, 255);
        }

        #url-to-shorten {
            width: 100%;
            padding: 1rem;
            border: 1px solid #ced4da;
            border-radius: .3rem;
        }

        .input-grp {
            display: flex;
            width: 80vw;
            max-width: 50vw;
        }

        .submit {
            background-color: #0d6efd;
            color: #fff;
            height: 3rem;
            padding: .5rem;
            font-size: 1rem;
            font-family: 'Source Sans Pro', sans-serif;
            border: none;
            border-radius: .3rem;
            margin-top: .4rem;
            margin-left: -10.5rem;
            box-shadow: 0px 2px 4px gray;
            /* transform: translateX(-102%); */
        }

        #intro {
            z-index: -100;
        }

        .nav-link, .navbar-brand {
            color: #fff;
        }

        .nav-item {
            margin-right: 2rem;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 1.2rem;
        }

        .nav-link {
            position: relative;
        }

        .nav-link:hover {
            color: #fff;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #fff;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }

        .nav-link:hover:after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .action {
            color: #fff;
            font-family: 'Lato', sans-serif;
        }

        h4.action {
            font-style: italic;
            font-weight: 400;
        }

        h1.action {
            font-weight: 700;
            font-size: 60px;
        }

        .link {
            margin-top: 2rem;
            color: #fff;
            font-family: 'Source Sans Pro', sans-serif;
        }

        @media screen and (max-width: 798px) {
            .input-grp { flex-direction: column; }
            .submit { margin-left: 0; }

        }
    </style>
    <title>Short.ly URL Shortener</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Short.ly</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feedback.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div id="contentContainer" class="container">
        <div class="row">
            <div id="realContent" class="col-xs-12">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-offset-0">
                <h1>Sign Up</h1>
                </div>
            </div>
            <div class="row">
                <section class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-offset-0">
                <div class="well well-lg">
                    <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                        <div class="col-xs-12">
                            <h3>Welcome</h3></div>
                        </div>
                        <div class="row">
                        <!-- Instructions -->
                        <div class="col-xs-12">
                            <p class="lead">Register now for <span class="text-success">FREE</span></p>
                            <ul class="list-unstyled" style="line-height: 3; font-size: 1.4em; font-weight: 500;">
                            <li><span class="fa fa-check text-success"></span> Participate in this contest</li>
                            <li><span class="fa fa-check text-success"></span> Leaderboard feature to see who is on top</li>
                            <li><span class="fa fa-check text-success"></span> Solve the problems faster than others to win</li>
                            <li><span class="fa fa-check text-success"></span> Choose to code in your favorite language</li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <!-- Registration Form -->
                    <div class="col-sm-6 col-xs-12">
                        <div class="row">
                        <div class="col-xs-12">
                            <form id="signupForm" method="post" accept-charset="UTF-8" validate>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user-secret icon-2x"></i></i></span>
                                <input id="name" class="form-control input-lg" placeholder="Full Name" maxlength="100" type="text" name="name">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-user icon-2x"></i></span>
                                <input id="handle" class="form-control input-lg" placeholder="Username" maxlength="100" type="text" name="handle">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-envelope icon-2x"></i></span>
                                <input id="email" class="form-control input-lg" placeholder="Email" maxlength="100" type="email" name="email" validate>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-asterisk icon-2x"></i></span>
                                <input id="password" class="form-control input-lg" placeholder="Password" maxlength="60" type="password" name="password">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="icon-asterisk icon-2x"></i></span>
                                <input id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" maxlength="60" type="password" name="password_confirmation">
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6LdJRxETAAAAABZT0MUNO1r5at_-JuSGeAPTqIM6"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="btn-signup" class="btn btn-block btn-primary btn-lg">Sign Up</button>
                            </div>
                            </form>
                            <div class="form-group">
                            <div class="topCushion">Already a member? <a href="#">Login</a></div>
                            </div>
                        </div>
                        <!-- /.col-xs-12 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col-sm-6 col-xs-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.well well-lg -->
                </section>
                <!-- /.col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-xs-12 col-sm-offset-0 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /#realContent -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /#contentContainer -->
    </main>
    <svg width="100%" height="41.8%" id="intro" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path id="wave" d="" fill="#fff"/>
    </svg>
    <script src="wavy.js"></script>
</body>
</html>
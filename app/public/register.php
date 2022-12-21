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
        <div class="container d-flex flex-column align-items-center mt-5 pt-5">
            <form class="m-auto mt-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="input-grp">
                    <input type="text" id="url-to-shorten" name="url" placeholder= "Type a URL (content you want your shortened link to point to)"/>
                    <button class="submit" type="submit">Generate Shortly link</button>
                </div>
            </form>
        </div>
    </main>
    <svg width="100%" height="41.8%" id="intro" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path id="wave" d="" fill="#fff"/>
    </svg>
    <script src="wavy.js"></script>
</body>
</html>
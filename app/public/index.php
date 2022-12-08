<?php
    // echo $_SERVER['REQUEST_URI'];
    function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }

    $url_id = '';
    $show_link = false;
    if(!empty($_POST['url'])) {
        $url_id = substr(uniqid(), 6, 6);
        $short_url = "http://localhost:8080/" . $url_id . ".php";
        // Write data into file. Will create the file if it doesn't exist
        $file = $url_id . ".php";
        $handle = fopen($file, 'w');
        // $contents = $url_id . " page look like this...";
        $contents = "<?php header(\"Location: " . $_POST['url'] . "\"); ?>";
        fwrite($handle, $contents);
        fclose($handle);
        $show_link = true;
    }
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
    <style>
        body {
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
            max-width: 900px;
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

        svg {
            position: absolute;
            /* top: -12rem; */
            left: 0;
            z-index: -100;
        }

        .nav-link, .navbar-brand {
            color: #fff;
        }

        @media screen and (max-width: 798px) {
            .input-grp { flex-direction: column; }
            .submit { margin-left: 0; }

        }
    </style>
    <title>Short.ly URL Shortener</title>
</head>
<body>
    <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs></defs><path id="myID" d=""/></svg>
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
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container d-flex flex-column align-items-center">
            <form class="m-auto mt-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="input-grp">
                    <input type="text" id="url-to-shorten" name="url" placeholder="Type a URL (content you want your shortened link to point to)" />
                    <button class="submit" type="submit">Generate Shortly link</button>
                </div>
            </form>
            <?php if($show_link): ?>
                <h2>Your shortened link is: <?php echo $short_url; ?></h2>
            <?php endif; ?>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="wavify.js"></script>
    <script>
        console.log("height: " + screen.height);
        var myWave = wavify( document.querySelector('#myID'), {
            height: 500,
            bones: 5,
            amplitude: 40,
            // color: 'rgba(150, 97, 255, 1)',
            color: 'rgba(255, 255, 255, 1)',
            speed: .15
        });
    </script>
</body>
</html>
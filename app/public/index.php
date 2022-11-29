<?php
    echo $_SERVER['REQUEST_URI'];
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
    if(!empty($_POST['url'])) {
        $url_id = substr(uniqid(), 6, 6);
        $short_url = "http://localhost:8080/" . $url_id . ".php";
        echo "<a href=${short_url}>${short_url}</a>";
        // Write data into file. Will create the file if it doesn't exist
        $file = $url_id . ".php";
        $handle = fopen($file, 'w');
        $contents = $url_id . " page look like this...";
        fwrite($handle, $contents);
        fclose($handle);
    }
    echo '<br/>' . $url_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>My URL Shortener</title>
</head>
<body>
    <form class="m-auto w-50 mt-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="mb-3">
            <input type="text" class="form-control" id="url-to-shorten" name="url" placeholder="Type a URL (content you want your shortened link to point to)" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</body>
</html>
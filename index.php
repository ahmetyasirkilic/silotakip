<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silo Takip</title>
</head>
<body>
    Test
    <?php
    echo 'php is working';
    $xml = file_get_contents("https://api.thingspeak.com/channels/2001802/feeds.json?api_key=Y53XE3DGF7LRRSYO&results=2");
echo $xml;
    ?>
</body>
</html>
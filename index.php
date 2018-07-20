<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-89382312-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-89382312-2');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>What is Kenny wearing?</title>
    <style>
        img { height: 100%; }
        h1, div { text-align: center; }
        .clothing-container {
            height: 400px;
            width: 400px;
            margin: 0 auto;
        }
        .shoe-container {
            height: 200px;
            margin: 0 auto;
        }
        body {
            background-repeat: no-repeat;
            background-position: center center;
        }
    </style>
    
    <link rel="shortcut icon" href="media/favicon.ico" type="image/x-icon">
    <link rel="icon" href="media/favicon.ico" type="image/x-icon">
</head>
<?php
$hua = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');
$os = 'I have no idea...';

if(preg_match('/android/i', $hua)) {
    $os = 'Android';
} elseif (preg_match('/linux/i', $hua)) {
    $os = 'Linux';
} elseif (preg_match('/iphone/i', $hua)) {
    $os = 'iPhone';
} elseif (preg_match('/macintosh|mac os x/i', $hua)) {
    $os = 'Mac';
} elseif (preg_match('/windows|win32/i', $hua)) {
    $os = 'Windows';
}
if (strcmp($os, 'Mac') == 0 || strcmp($os, 'iPhone') == 0) {   
?>
<body style="background-image:url('media/404.jpg');background-color:#f7f7f7">
<?php
} else {
?>
<body>
    <h1>What is Kenny wearing?</h1>
    <div class="clothing-container">
        <img id="shirt" src="media/shirt2.png" />
    </div>
    <div class="clothing-container">
        <img id="pants" src="media/pants1.png" />
    </div>
    <div class="shoe-container">
        <img id="shoes" src="media/shoes1.png" />
    </div>
    <script>
        function configClothing(clothing, count) {
            let num = Math.floor(Math.random() * count) + 1;
            let imgSrc = `media/${clothing}${num}.png`;
            document.getElementById(clothing).src = imgSrc;
        }
        
        configClothing("shirt", 7);
        configClothing("pants", 2);
        configClothing("shoes", 1);
    </script>
<?php 
}
?>
</body>
</html>
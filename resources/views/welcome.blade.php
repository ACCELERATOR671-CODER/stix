<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            stix
        </title>
        <link rel="stylesheet" href="css/w3.css">
    </head>
    <body class="antialiased">
        <div class="w3-container w3-black w3-margin w3-center w3-padding w3-round-xxlarge">
            <canvas id="grid" width="1200" height="880" ></canvas>
        </div>
        <script type="text/javascript" src="js/stix.js"></script>
    </body>
</html>

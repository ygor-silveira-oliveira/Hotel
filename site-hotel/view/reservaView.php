<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Oswald&family=Roboto+Condensed:wght@300&display=swap');

        body{
            height: 100vh;
            background-image: linear-gradient(to bottom,  blue, darkgray);
            background-repeat: no-repeat;
        }
        p{
            text-align: center;
            color: lightgrey;
            font-family: 'Roboto Condensed';
            padding: 5px;
        }
        p:hover{
            text-decoration: underline;
            color: white;
            font-family: monospace;
            font-size: 1.4em;
        }
    </style>
</head>
<body>
    
<?php

$resultado = $_GET['resultado'];

echo $resultado;

?>

</body>
</html>


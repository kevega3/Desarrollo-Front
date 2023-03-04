<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Styles/style.css">
	<title>Ejemplo DOM</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;1,700&display=swap"
        rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


<body style="font-family: 'Montserrat', sans-serif;font-weight: bold; background: #ebebeb;">
    </style>
    <?php include('Templates/Menu.html')?>

    <div class="container">
        <h1 class='Titulosalida'>¿Beneficios de nuestra plataforma YAHOO?</h1>
        <div class="div" id='Contenidos'>

        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, omnis. Vel asperiores, fugiat est saepe tempora consequatur ratione suscipit laboriosam deleniti accusantium voluptates mollitia, non magnam autem dolorum illum excepturi?</p>
        
        <div class='btn btn-primary btonMas' id='BtonMas'  onclick='Mas()'>Quiero Saber mas</div>
    </div>


    <?php include('Templates/fooder.html')?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="Scripts/main.js"></script>
</body>
</html>
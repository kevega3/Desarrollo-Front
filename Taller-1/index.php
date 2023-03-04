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


    <!--=====================================
	LOGOTIPO
	======================================-->

    <!--=====================================
	BOTONERA
	======================================-->

    <?php include('Templates/Menu.html')?>


    <!--=====================================
	CONTENIDO
	======================================-->



    <div class='container'>
	<h2 id = 'TituloTextos'>Tabla de nombres</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="Titulos">
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Red Social</th>
					<th scope="col" class='Center'>Referencia</th>
                </tr>
            </thead>
            <tbody>
                <tr  id="Table1">
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
					<td class="Center"><button class='btn btn-primary' onclick="llamaNombres('Mark')">Click</button></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
					<td class='Center'><button class='btn btn-primary' onclick="llamaNombres('Jacob')">Click</button></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Jose</td>
                    <td>Thornton</td>
                    <td>@fat</td>
					<td class='Center'><button class='btn btn-primary' onclick="llamaNombres('Jose')">Click</button></td>
                </tr>
				<tr>
                    <th scope="row">4</th>
                    <td>Maria</td>
                    <td>Thornton</td>
                    <td>@fat</td>
					<td class='Center'><button class='btn btn-primary' onclick="llamaNombres('Maria')">Click</button></td>
                </tr>
				<tr>
                    <th scope="row">5</th>
                    <td>Alverto</td>
                    <td>Thornton</td>
                    <td>@fat</td>
					<td class='Center'><button class='btn btn-primary' onclick="llamaNombres('Alverto')">Click</button></td>
                </tr>
				<tr>
                    <th scope="row">6</th>
                    <td>Carlos</td>
                    <td>Thornton</td>
                    <td>@fat</td>
					<td class='Center'><button class='btn btn-primary' onclick="llamaNombres('Carlos')">Click</button></td>
                </tr>
				
            </tbody>
        </table>

    </div>



    <?php include('Templates/fooder.html')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="Scripts/main.js"></script>

</body>

</html>
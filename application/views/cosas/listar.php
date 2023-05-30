<?php
    



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header class="header">
        <h1 class="header__h1">Lista de cosas</h1>
    </header>
    <main class="main">
        <div class="tabla">
            <table class="tabla__table">
                <thead class="tabla__thead">
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </thead>
                <tbody class="tabla__tbody">
                    <tr class="tabla__tr">
                        <td class="tabla__td">1</td>
                        <td class="tabla__td">Lapiz</td>
                        <td class="tabla__td">sffsd-fsdfsdf.png</td>
                        <td class="tabla__td">lapiz marca Faber-Castel</td>
                        <td class="tabla__td">
                            <button class="tabla__button">Eliminar</button>
                            <button class="tabla__button tabla__button--background">Modificar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
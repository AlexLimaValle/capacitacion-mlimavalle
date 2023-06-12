<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="../../../css/estilo.css">
</head>
<body>
    <main class="main">
        <div class="container">
            <div class="container__tabla">
                <table class="container__table">
                    <thead class="container__thead">
                        <th class="container__th">id</th>
                        <th class="container__th">Nombre</th>
                        <th class="container__th">Cantidad</th>
                        <th class="container__th">Informacion</th>
                        <th class="container__th">Acciones</th>
                    </thead>
                    <tbody class="container__tbody">
                        <tr class="container__tr">
                            <td class=container__td>1</td>
                            <td class=container__td>Lapiz</td>
                            <td class=container__td>3</td>
                            <td class=container__td>Lapiz marca bit</td>
                            <td class=container__td>
                                <button class="container__button">Editar</button>
                                <button class="container__button">Borrar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="container__buttons">
                <button class="container__button"><a href="<?php echo base_url("add")?>">Agregar nuevo</a></button>
            </div>
        </div>
    </main>
    <footer class="footer">

    </footer>
</body>
</html>
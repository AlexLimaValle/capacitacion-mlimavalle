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
            <form action="<?php echo base_url();?>cosas/filtros" class="container__form" method="POST">
                <div class="container__filter">
                    <label class="container__label" for="filtros">Ingrese nombre: </label>
                    <input type="text" id="filtros" name="filtro" class="container__input-filter">
                    <button type="submit" class="container__button-filter">Buscar</button>
                </div>
            </form>
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
                        <?php $numero=1; foreach($data as $key => $value):?>
                            <tr class="container__tr">
                                <td class="container__td"><?php echo $numero++;?></td>
                                <td class="container__td"><?=$value->nombre?></td>
                                <td class="container__td"><?=$value->cantidad?></td>
                                <td class="container__td"><?=$value->informacion?></td>
                                <td class="container__td">
                                    <a href="<?php echo base_url();?>cosas/<?php echo $value->id;?>" class="container__link">
                                        <button class="container__button">Editar</button>
                                    </a>
                                    <a href="<?php echo base_url();?>cosas/delete/<?php echo $value->id;?>" class="container__link">
                                        <button class="container__button container__button--background">Borrar</button>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach;?>
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
<!-- se debe mejorar el css y html -->
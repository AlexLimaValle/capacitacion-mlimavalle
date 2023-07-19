<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/estilo.css">
</head>
<body>
    <main class="main">
        <h1>Resultado de filtro: </h1>
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
                                <?php $numero=1; foreach($respuesta as $key => $items):?>
                                    <tr class="container__tr">
                                        <td class="container__td"><?php echo $numero++;?></td>
                                        <td class="container__td"><?=$items->nombre?></td>
                                        <td class="container__td"><?=$items->cantidad?></td>
                                        <td class="container__td"><?=$items->informacion?></td>
                                        <td class="container__td">
                                            <a href="<?php echo base_url();?>cosas/<?php echo $items->id;?>" class="container__link">
                                                    <button class="container__button">Editar</button>
                                            </a>
                                            <a href="<?php echo base_url();?>cosas/delete/<?php echo $items->id;?>" class="container__link">
                                                    <button class="container__button container__button--background">Borrar</button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                    </table>
                </div>
                <div class="container__buttons">
                    <button class="container__button"><a href="<?php echo base_url("listar")?>">Regresar a listado</a></button>
                </div>

        </div>
            
    </main>
</body>
</html>
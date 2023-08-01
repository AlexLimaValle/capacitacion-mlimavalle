<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <div class="container">
        <div class="tables">
            <div class="filter">
                <input type="text" name="filter" class="filter__input">
                <a href="#" class="filter__a">
                    <button class="filter__button">Filtrar</button>
                </a>
            </div>
            <div class="tables_buttons">
                <a href="<?php base_url();?>addCosa" class="tables__buttons-a">
                    <button class="tables__button tables__button--border-radius" type="button">Agregar</button>
                </a>
                <a href="<?php echo base_url();?>" class="tables__buttons-a">
                    <button class="tables__button" type="button">Menu</button>
                </a>
            </div>
            <table class="table">
                <tr class="table__tr">
                    <th class="table__th">ID</th>
                    <th class="table__th">NOMBRE</th>
                    <th class="table__th">CANTIDAD</th>
                    <th class="table__th">INFORMACION</th>
                    <th class="table__th">ACCIONES</th>
                    <th class="table__th">TAGS</th>
                </tr>
                <?php foreach($datos as $item):?>
                    <tr class="table__tr">
                        <td class="table__td"><?= $item->id?></td>
                        <td class="table__td"><?= $item->nombre?></td>
                        <td class="table__td"><?= $item->cantidad?></td>
                        <td class="table__td"><?= $item->informacion?></td>
                        <td class="table__td">
                            <a href="<?php base_url()?>update/<?= $item->id?>" class="table__a">
                                <button class="table__button" type="button">UPDATE</button>
                            </a>
                            <a href="<?php base_url()?>delete/<?= $item->id?>" class="table__a">
                                <button class="table__button table__button--background" type="button">DELETE</button>
                            </a>
                        </td>
                        <td></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>
</html>
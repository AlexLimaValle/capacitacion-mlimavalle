<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <div class="container">
        <div class="tables">
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
                    <th class="table__th">ACCIONES</th>
                </tr>
                <?php foreach($tag as $items):?>
                    <tr class="table__tr">
                        <td class="table__td"><?= $items->id?></td>
                        <td class="table__td"><?= $items->nombre?></td>
                        <td class="table__td">
                            <a href="<?php base_url()?>" class="table__a">
                                <button class="table__button" type="button">UPDATE</button>
                            </a>
                            <a href="<?php base_url()?>" class="table__a">
                                <button class="table__button table__button--background" type="button">DELETE</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
</body>
</html>
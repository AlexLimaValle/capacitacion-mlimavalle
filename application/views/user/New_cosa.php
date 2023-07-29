<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../css/style.css">
</head>
<body>
    <main class="container">
        <div class="container__form">
            <form action="<?php echo base_url('save');?>" class="form" method="POST">
                <div class="form__group form__group-input">
                    <label for="nombre" class="form__label">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form__input">
                </div>
                <div class="form__group form__group-input">
                    <label for="cantidad" class="form__label">Cantidad:</label>
                    <input type="number" min="1" id="cantidad" name="cantidad" class="form__input form__input--width">
                </div>
                <div class="form__group form__group--border">
                    <div class="form__tags">
                        <?php foreach($tags as $tag):?>
                            <div class="form__tag" style="background:<?=color();?>">
                                <input type="checkbox" id="<?= $tag->nombre?>" name="tags[]" value="<?= $tag->id?>" class="form__tag-check">
                                <label for="<?= $tag->nombre?>" class="form__tag-label"><?= $tag->nombre?></label>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="form__group">
                    <label for="informacion" class="form__label">Informacion: </label>
                    <textarea name="informacion" name="informacion" class="form__textarea" id="informacion"></textarea>
                </div>
                <div class="form__buttons">
                    <a href="#" class="form__a">
                        <button class="form__button form__button--border-left" type="submit">Agregar</button>
                    </a>
                    <a href="#" class="form__a">
                        <button class="form__button" type="reset">Borrar</button>
                    </a>
                    <a href="<?php echo base_url('tabla');?>" class="form__a">
                        <button class="form__button form__button--background" type="button">Tabla</button>
                    </a>
                    <a href="<?php echo base_url();?>" class="form__a">
                        <button class="form__button form__button--border-right" type="button">Inicio</button>
                    </a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
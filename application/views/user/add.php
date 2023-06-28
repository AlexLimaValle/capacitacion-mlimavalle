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
            <form class="form" action="<?php echo base_url('save');?>" method="post">
                <div class="form__inputs">
                    <label for="nombreProducto" class="form__label">Ingrese nombre: </label>
                    <input class="form__input" type="text" name="nombre" id="nombreProducto" placeholder="Ingrese su nombre">
                </div>
                <div class="form__inputs">
                    <label for="cantidadDeProducto" class="form__label">Ingrese cantidad: </label>
                    <input class="form__input form__input--size" type="number" min="1" name="cantidad" id="cantidadDeProducto">
                </div>
                <div class="form__textarea">
                    <label for="campoDeTexto" class="form__label">Informacion: </label>
                    <textarea name="informacion" id="campoDeTexto" class="form__textareas"></textarea>
                </div>
                <div class="form__buttons">
                    <button type="submit" class="form__button">Agregar</button>
                    <button class="form__button"><a class="form__button-a" href="<?php echo base_url('listar')?>" class="form__button-a">ver listas</a></button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <h1 class="header__h1">Crear cosas</h1>
    </header>
    <main class="main">
        <div class="container">
            <div class="formulario">
                <form class="formulario__form" action="" method="POST">
                    <div class="formulario__text">
                        <label for="campo_nombre" class="formulario__input-label">Ingrese nombre: </label>
                        <input type="text" class="formulario__input-text formulario__input-text--border" name="nombre" id="campo_nombre">
                        <p class="formulario__input-coment">debe ingresar el nombre con la que se identifique a la cosa</p>
                    </div>
                    <div class="formulario__text formulario__text--height">
                        <img src="../../img/img.png" alt="imagen" class="formulario__input-img">
                        <label for="campo_nombre" class="formulario__input-label">Ingrese imagen: </label>
                        <input type="file" class="formulario__input-text" name="nombre" id="campo_nombre">
                        <p class="formulario__input-coment">debe seleccionar un imagen formato png</p>
                    </div>
                    <div class="formulario__text formulario__text--dimension">
                        <label class="formulario__input-label" for="textarea_comentario">Ingrese una descripcion: </label>
                        <textarea name="descripcion" class="formulario__text-textarea" id="textarea_comentario"></textarea>
                    </div>
                    <button class="formulario__button" type="submit">Agregar</button>
                </form>
            </div>
            <div class="poster">
                
            </div>
        </div>
    </main>
</body>
</html>
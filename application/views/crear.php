<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link rel="stylesheet" href="../.././style.css">
</head>
<style>
   .main{
        width:100%;
        height:90vh;
   }
   .main .container{
        width:100%;
        height:100%;
        display:flex;
        flex-flow:row wrap;
        justify-content: space-around;
   }

   .main .container .formulario{
        width:50%;
        height:100%;
        display:flex;
        flex-flow:row wrap;
        justify-content:center;
        align-items:center;
   }
   .main .container .poster{
        width:50%;
        height: 100%;
        background-image: url(../../img/fondo.jpeg);
        background-size:cover;
        position:relative;
        animation: imagen 5s linear 2s infinite alternate;
        transition:all 2s;
   }

   .main .container .poster::before{
        content: "";
        position:absolute;
        width:100%;
        height:100%;
        background:rgba(0, 0, 204, 0.365);
   }

   .main .container .formulario .formulario__form{
        width:90%;
        height:80%;
        border-radius:10px;
        border: 1px solid #dbd3d3;
        display: flex;
        flex-flow:column wrap;
        justify-content:center;
        align-items:center;
   }
   .main .container .formulario .formulario__form .formulario__text{
        width: 80%;
        height:20%;
        transition: border 4s;
   }

   .main .container .formulario .formulario__form .formulario__text:focus{
        border: 2px solid red;
   }
   .main .container .formulario .formulario__form .formulario__text--dimension{
        height:35%;
   }
   .main .container .formulario .formulario__form .formulario__text .formulario__input-img{
        width:15%;
        height:40%;
        filter:grayscale(100%);
        margin-bottom: 20px;
        position:absolute;
        left:60%;
        top:25%;
   }
   .main .container .formulario .formulario__form .formulario__text--height{
        height:30%;
        position: relative;
        padding: 30px 0px;
        margin-top:10px;
   }
   .main .container .formulario .formulario__form .formulario__text .formulario__input-label{
        display: block;
        color: #716969;
        margin-bottom:5px;
   }
   .main .container .formulario .formulario__form .formulario__text .formulario__input-text--border{
        width:80%;
        height:40%;
        border-radius:20px;
        border: 1px solid #dbd3d3;
        outline-style:none;
        background: transparent;
        padding: 0px 20px;
   }

   .main .container .formulario .formulario__form .formulario__text .formulario__input-coment{
        font-size:0.8rem;
        color: #716969;
        margin-top:5px;
   }
   .main .container .formulario .formulario__form .formulario__button{
        background: rgb(52, 61, 229);
        color:#fff;
        border:none;
        border-radius:10px;
        width:10%;
        height:8%;
        border: transparent solid 2px;
        transition: border .4s;
        cursor:pointer;
   }

   .main .container .formulario .formulario__form .formulario__button:hover{
        border: #9b9595 solid 2px;
   }

   .main .container .formulario .formulario__form .formulario__text .formulario__text-textarea{
        width:100%;
        height:80%;
        border-radius:10px;
        padding:5px 20px;
        outline-style:none;
   }
   @keyframes imagen{
        0%{
            background-image: url(../../img/fondo.jpeg);
            background-size:cover;
            background-position:center;
        }
        100%{
            background-image: url(../../img/fondo-1.jpg);
            background-size:cover;
            background-position:center;
        }
   }
</style>
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
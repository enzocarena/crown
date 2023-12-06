<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
            * {
                margin: 0;
                padding: 0;
            }
            
            body {
                background-image: url('imagenes/fondo.png'); /* Reemplaza con la URL de tu imagen de fondo */
                background-size: cover;
                width: 100%;
                height: 100vh;
                position: relative;
            }

            body::before{
                content: "";
                background: inherit;
                filter: blur(10px); 
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
            }

            div {
                margin-bottom: 15px;
                display: inline-block;
            }
            
            form h2 {
                margin: 0px 0px 10px 0px;
                display: inline-block
            }

            form {
                background-color: rgba(0, 0, 0, 0.5);
                position: absolute;
                width: 230px;
                height: auto;
                padding: 20px;
                border: 5px solid black;
                top: 30%;
                left: 50%;
                margin-top: -100px;
                transform: translateX(-50%)
            }

            .input__e-mail{
	            position:relative;
	            margin-bottom:25px;
}
.input__e-mail label{
	position:absolute;
	top:0px;
	left:0px;
	font-size:16px;
	color:#fff;	
    pointer-event:none;
	transition: all 0.5s ease-in-out;
}
.input_e-mail input{ 
  border:0;
  border-bottom:1px solid #555;  
  background:transparent;
  width:100%;
  padding:8px 0 5px 0;
  font-size:16px;
  color:#fff;
}
.input_e-mail input:focus{ 
 border:none;	
 outline:none;
 border-bottom:1px solid #e74c3c;	
}

.btn{
	background-color: black;
	outline: none;
    border: 0;
    color: white;
	padding:10px 20px;
	margin-top:50px;
	border-radius:2px;
	cursor:pointer;
	position:relative;
}

            #submitt {
                padding: 2px;
                float: right;
            }

            #title {
                position: relative;
                width: 100%
            }

            #logoo {
                height: 30px;
                float: right;
            }
            
            label, h2 {
                color: #ffffff
            }

            .dVolver {
                text-align: center;
                padding: 0.5em;
                width: 135px;
                margin: 0
            }
        </style>
</head>
<body>
  <form method="post" action="<?= base_url('crearUsuario') ?>" >
            <h2 id="title">register: <img src="<?php echo base_url();?>imagenes/corona.png" alt="logo" id="logoo"></h2><br>
            <div class="input_e-mail">
                <label for="Nombre">Nombre: </label>
                <input type="text" name="nombre" class="userypass" style="width: 220px" required="">
            </div><br>
            <div class="input_e-mail">
                <label for="Apellido">Apellido: </label>
                <input type="text" name="apellido" class="apellido" style="width: 220px" required="">
            </div><br>
            <div class="input_e-mail">
                <label for="Correo">E-mail: </label>
                <input  name="correo" class="Correo" style="width: 220px" required type="email">
            </div><br>
            <div class="input_e-mail">
                <label for="contrasena">Contraseña: </label>
                <input type="password" name="contrasena" class="form_input" style="width: 223px" required="">
            </div><br>
            <div class="input_e-mail">
                <label for="telefono">Telefono: </label>
                <input type="Telefono" name="telefono" class="form_input" style="width: 223px" required="">
            </div><br>
            <div class="dVolver">
                    <input type="submit" value="Acceder" id="submitt" class="btn">
            </div>
        </form>
</body>
</html>
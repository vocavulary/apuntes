<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>

<style>

form {
    width: 80%;
    border: 2px solid black;
    margin: 40px;
    padding: 20px;
    background-color: #B86BF4;
    border-radius: 20px;
    
}

label {
    color: black;
    font-size: 14px;
    /* respectar las margenes*/
    display: block;
    width: 100%;

}

textarea {
    /* redimencionar el ntamaÃ±o*/
    resize: vertical;
    /*tamaÃ±o maximo*/
    max-height: 200px;
    min-height: 100px;
    background-color: black;


}

input,
textarea {
    margin-bottom: 20px;
    width: 100%;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #33C0FF;
    background-color: white;
    color: black;
    /*font-weight: bold;*/
}

body {
    background-image: url("https://fondosmil.com/fondo/36779.jpg");
    /*fondo en link porque no quiere dejar con imagen*/
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

#LOGIN {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#LOGIN{
    background: #471270;
}

#LOGIN{
    position: relative;
    display: inline-block;
    padding: 20px 25px;
    /*tamaï¿½o boton enviar*/
    margin: 4px 0;
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 2px;

}

#LOGIN:hover {
    background: #1E87E3;
    color: #050801;
    box-shadow: 0 0 5px #1147C5,
        0 0 25px #000000,
        0 0 50px #1147C5,
        0 0 200px #000000;

}

#LOGIN span {
    position: absolute;
    display: block;
}

#LOGIN span:nth-child(1) {
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, orange);
    animation: animate1 1s linear infinite;
}

@keyframes animate1 {
    0% {
        left: -100%;
    }

    50%,
    100% {
        left: 100%;
    }
}

#LOGIN span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, red);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}

@keyframes animate2 {
    0% {
        top: -100%;
    }

    50%,
    100% {
        top: 100%;
    }
}

#LOGIN span:nth-child(3) {
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, orange);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}

@keyframes animate3 {
    0% {
        right: -100%;
    }

    50%,
    100% {
        right: 100%;
    }
}


#LOGIN span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, red);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}

@keyframes animate4 {
    0% {
        bottom: -100%;
    }

    50%,
    100% {
        bottom: 100%;
    }
}


#LOGIN{
    border-radius: 10px;
}

.img2 {
    position: absolute;
    top: 58%;
    right: 8%;
    width: 300px;
    height: 225px;

}



/*----------------SALIR-------------------------------*/

#salir {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#salir {
    background: rgb(180, 38, 38);
}

#salir {
    font-weight: 900;
    position: relative;
    display: inline-block;
    padding: 20px 25px;
    margin: 40px 0;
    color: black;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 4px;
    overflow: hidden;
    margin-right: 2px;

}

#salir:hover {
    background: rgb(201, 26, 26);
    color: #050801;
    box-shadow: 0 0 5px white,
        0 0 25px #000000,
        0 0 50px red,
        0 0 200px #000000;

}

#salir span {
    position: absolute;
    display: block;
}

#salir span:nth-child(1) {
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, red);
    animation: animate1 1s linear infinite;
}

@keyframes animate1 {
    0% {
        left: -100%;
    }

    50%,
    100% {
        left: 100%;
    }
}

#salir span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, red);
    animation: animate2 1s linear infinite;
    animation-delay: 0.25s;
}

@keyframes animate2 {
    0% {
        top: -100%;
    }

    50%,
    100% {
        top: 100%;
    }
}

#salir span:nth-child(3) {
    bottom: 0;
    right: 0;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, red);
    animation: animate3 1s linear infinite;
    animation-delay: 0.50s;
}

@keyframes animate3 {
    0% {
        right: -100%;
    }

    50%,
    100% {
        right: 100%;
    }
}


#salir span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, red);
    animation: animate4 1s linear infinite;
    animation-delay: 0.75s;
}

@keyframes animate4 {
    0% {
        bottom: -100%;
    }

    50%,
    100% {
        bottom: 100%;
    }
}


#salir {
    border-radius: 20px;
    top: -30px;
    left: 10px;
    position: absolute;
}
</style>
</head>

<body>
    <h1> Registrarse</h1>
<form action="comprueba_login.php" method="post">

<center>
        <img src="../imagenes/Iniciar-sesion.gif" alt="Iniciar-sesion">
    </center>

    <div class="img2">
        <img src="https://www.icegif.com/wp-content/uploads/goku-icegif.gif" alt="sanke_uwu" height="250px">
    </div>


  
    <center>
        <form>
<table>
<tr style="">
<td class="izq">
          Login:</td><td class="der"><input type="text" name="login"></td></tr>
<tr><td class="izq">
Password:</td><td class="der"><input type="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" name="registrar" value="registrar"></td></tr></table>
	
                       
        </form>

    </center>

</body>
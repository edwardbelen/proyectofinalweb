<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Soluciones Tecnologicas EBC</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div id="main-container">
        <header>
            <div id="menu">
                <ul>
                   <b> <li id="logo"><a href=""><img src=""></a> <font FACE=" Courier"><h1 id=nombre>EBC Soluciones</h1></font></li>
 <font FACE="Comic Sans MS"><li><a href="index.php">Inicio</a></li>
                    <li><a href="Servicios.php">Servicios</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="cotizaciones.php">Cotizaciones</a></li></b></font>
                </ul>
            </div>

            <main>
                <div class="text">
                    <h1>¡Reclamaciones!</h1>
                    <p>
                    ¡Somos Solucion a Tus Necesidades!
                    </p>
                    <p>
                        <button>Slide Down</button>
                    </p>
                </div>

                <div class="image">
                 <br><br><img src="img/equipos.png" width="600"/>
                </div>
            </main>
        </header>
        <hr>
        <div class="section" id="features">
            <div class="layout layout-right">
                <div class="image">
                    <img src="img/reclamaciones.png" width="500" >
                </div>
                <div class="text">
                    <h3>Reclamaciones</h3>
                    <form action="formulario.php" method="post" enctype="multipart/form-data" name="form1"> 
                        <table width="100%" border="0">
                        <h4 align="justify">Ayudanos a servirte mejor, estamos a la entera dispocision de escuchar las quejas y surgerencias para darle solucion a la brevedad.</h4><br>
                        <tr> 
                        <td><div align="right">Nombre:(*)</div></td> 
                        <td><input name="nombre" type="text" id="nombre" maxlength="50"></td> 
                        </tr> 
                        <tr> 
                        <td><div align="right">E-mail:</div></td> 
                        <td><input name="mail" type="text" id="mail" maxlength="50"></td> 
                        </tr> 
                        <tr> 
                        <td><div align="right">Telefono / Celular:(*)</div></td>
                        <td><input name="telefono" type="text" id="telefono" maxlength="50"></td>  
                        </tr> 
                        <tr> 
                        <td><div align="right">Referencia</div></td>
                        <td><input name="referencia" type="text" id="referencia" maxlength="50"></td> 
                        </tr> 
                        <tr> 
                        <td><div align="right">Mensaje:(*)</div></td>
                        <td><input name="mensaje" type="text" id="mensaje" maxlength="150"></td>
                        </div></td>
                        <tr> 
                        <td><input name="Enviar" type="submit" id="Enviar" value="Enviar"></td> 
                        </tr> 
                        </table> 
                        </form> 

                </div>
            </div>
        </div>
             <nav>
               <ul>
                 <li><a href="ofertas.php">Ofertas</a></li>
                 <li><a href="reclamaciones.php">Reclamaciones</a></li>
                 <li><a href="contactos.php">Contacto</a></li>
               </ul>
             </nav>
            <footer>
            EBC Soluciones © Derechos Reservados
    
        </footer>
    </div>
</body>
</html>
<?php
session_start();
if (empty($_SESSION["id"])) {
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="menustyle.css">
</head>
<body>
    <!--sidebar es elemento laterales no importa el lado-->
    <div class="sidebar">
        <ul>
            <li class="logo">
                <a href="#">
                    <span class="icon"><ion-icon name="logo-web-component"></ion-icon></ion-icon></span>
                    <span class="text">Webside Logo</span>
                </a>
            </li>
            <li>
                <a href="/Login/inicio.php">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li>
            <a href="#">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
					<div class="text-black bg-success p-2">
						<?php
							
			         	   echo '<span style="color: black;">'. $_SESSION["nombre"]. " ". $_SESSION["apellidos"];
			        	?>
					</div>
                    
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="chatbubbles-outline"></ion-icon></span>
                    <span class="text">Chat</span>
                </a>
            </li>
            <li>
                <a href="menu.php">
                    <span class="icon"><ion-icon name="git-network-outline"></ion-icon></span>
                    <span class="text">Work </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="cog-outline"></ion-icon></span>
                    <span class="text">Settings</span>
                </a>
            </li>
            <div class="bottom">
                <li>
                    <a href="/Login/controlador/controlador_cerrar_sesion.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="text">Log out</span>
                    </a>
                </li>
            </div>
        </ul>
    </div>
    <header class="arribaxd">
        <div class="logo">
            <img src="Logo blanco.png" alt="Logo empresa img">
        </div>
    </header>
    <div class="abajo">
        <div class="cosas">
            <h2>Productos</h2>
            <a href="../productos/public">Ingresar</a>
        </div>
        <div class="calendario">
            <h2>Usuarios</h2>
            <a href="../usuario/public">Ingresar</a>
        </div>
        <div class="chat">
            <h2>Informacion</h2>
            <a href="../informacion/public">Ingresar</a>
        </div>
    </div>
    <div class="xd">
        <h2></h2>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
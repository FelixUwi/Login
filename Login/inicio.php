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
    <title>Pagina Inicio</title>
    <link rel="stylesheet" href="iniciostyle.css">
    <script src="//code.tidio.co/uj2qrwpcipvmhz76s3dfglbgu7ezyyjj.js" async></script>
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
                <a href="../usuario/public">
                    <span class="icon"><ion-icon name="people"></ion-icon></span>
                    <span class="text">Users </span>
                </a>
            </li>
            <li>
                <a href="../productos/public">
                    <span class="icon"><ion-icon name="cube"></ion-icon></ion-icon></span>
                    <span class="text">Products </span>
                </a>
            </li>
            <li>
                <a href="../informacion/public">
                    <span class="icon"><ion-icon name="analytics"></ion-icon></span>
                    <span class="text">Information </span>
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
                    <a href="controlador/controlador_cerrar_sesion.php">
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
            <br>
            <div class="reloj">
                <span id="tiempo">00 : 00 : 00</span>
            </div>
            <script src="script.js"></script>
        </div>
        <div class="calendario">
            <h1>Calendario</h1>
            <br>
            <h2>Abril 2024</h2>
            <br>
            <ol>
                <li class="day-name">Lun</li>
                <li class="day-name">Mar</li>
                <li class="day-name">Mie</li>
                <li class="day-name">Jue</li>
                <li class="day-name">Vie</li>
                <li class="day-name">Sab</li>
                <li class="day-name">Dom</li>
                <li class="first-day">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
                <li>5</li>
                <li>6</li>
                <li>7</li>
                <li>8</li>
                <li>9</li>
                <li>10</li>
                <li>11</li>
                <li>12</li>
                <li>13</li>
                <li>14</li>
                <li>15</li>
                <li>16</li>
                <li>17</li>
                <li>18</li>
                <li>19</li>
                <li>20</li>
                <li>21</li>
                <li>22</li>
                <li>23</li>
                <li>24</li>
                <li>25</li>
                <li>26</li>
                <li>27</li>
                <li>28</li>
                <li>29</li>
                <li>30</li>
                <!--<li>31</li>-->

            </ol>
        </div>
        <div class="chat">
            <h1>Lista de tareas Pendientes</h1>
            <input type="text" id="tarea">
            <button id="agregar">Agregar</button>

            <h3>Tareas - <span id="cantidad"> 0</span></h3>
            <ul id="listado">

            </ul>
        </div>
        <script src="script2.js"></script>
    </div>
    <div class="xd">
        <h2></h2>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
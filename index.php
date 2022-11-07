<?php
include "clases/Empleado.php";
include_once "clases/EmpleadoPlantilla.php";
$empPl = new EmpleadoPlantilla("Aritz","Arrondo","00587112",2250,150);
echo $empPl -> mostrar();
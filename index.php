<?php
include "clases/Empleado.php";
include_once "clases/EmpleadoPlantilla.php";
$empPl = new EmpleadoPlantilla("Aritz","Arrondo","00587112",2250,150);
$empPl2 = new EmpleadoPlantilla("Imanol","Tobillas","8123712312t",2049,0);
echo $empPl -> mostrar();

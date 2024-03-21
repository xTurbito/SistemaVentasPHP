<?php
require_once "../config/dbcontext.php";


$json = file_get_contents("php://input");
$datos = json_decode($json, true);


if (isset($datos["nombre"], $datos["precio_costo"], $datos["descripcion"], $datos["stock"], $datos["activo"],$datos["precio_venta"],$datos["departamento"])) {
    
    $nombre = $datos["nombre"];
    $precio_costo = $datos["precio_costo"];
    $precio_venta = $datos["precio_venta"];
    $descripcion = $datos["descripcion"];
    $stock = $datos["stock"];
    $lActivo = $datos["activo"];
    $Departamento = $datos["departamento"];
   
    $sql = "INSERT INTO productos (nombre, descripcion, precio_venta, stock, lActivo, precio_costo, IDDepartamento) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($link, $sql);

  
    mysqli_stmt_bind_param($stmt, "ssiddid", $nombre, $descripcion, $precio_venta, $stock, $lActivo, $precio_costo, $Departamento);


 
    if (mysqli_stmt_execute($stmt)) {
        $Resultado = "ok";
    } else {
        $Resultado = "error: " . mysqli_stmt_error($stmt);
    }

   
    mysqli_stmt_close($stmt);
} else {
  
    $Resultado = "error";
}


echo '{"Resultado":"'.$Resultado.'"}';

?>

<?php 
// 

$datos = array(
	"nombreCliente"=>$_POST['nombreCliente'], 
	"emailCliente"=>$_POST['emailCliente'], 
	"telefonoCliente"=>$_POST['telefonoCliente'],
"idOferta"=>$_POST['idOferta']);

echo json_encode($datos) ;
 ?>
<?php
    include_once 'apipedidos.php';
  
    $api = new ApiPedidos();
    //Mostrar todos los elementos
    $api->getAll();
    echo "<br/>";
    //Mostrar un elemento por id
    $idUsuario=1;
    $api->getPedidoById($idUsuario);
    //Insertar un nuevo elemento
    $idUsuario=2;
    $idLadrillo=2;
    echo "<br/>";
            $item = array(
                'idUsuario' => $idUsuario,
                'idLadrillo' => $idLadrillo,
            );
     $api->addProducto($item);
    //Eliminar elemento
    $id=3;
   // $api->deleteBrick($id);
    
?>
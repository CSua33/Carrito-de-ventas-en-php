<?php
    include_once 'apiladrillos.php';

    $api = new ApiLadrillos();
    //Mostrar todos los elementos
    $api->getAll();
    echo "<br/>";
    //Cambiar ladrillo de propietario y cambiar estado a vendido
    $idLadrillo=1;
    $nombre='Pedro';
    //$api->sendBrick($idLadrillo,$nombre);
    //Mostrar un elemento por id
    $api->getBrickById($idLadrillo);
    //Insertar un nuevo elemento
    $propietario='Carlo';
    $propiedad='Colima';
    $valor=2500;
    $estado='venta';
    echo "<br/>";
            $item = array(
                'propietario' => $propietario,
                'propiedad' => $propiedad,
                'valor' => $valor,
                'estado' => $estado,   
            );
    //$api->addBrick($item);
    //Eliminar elemento
    $idLadrillo=2;
    $api->deleteBrick($idLadrillo);
    
?>
<?php
    include_once 'apiladrillos.php';
    if(isset($_GET['mostrar'])){
    $api = new ApiLadrillos();
    //Mostrar todos los elementos
    $items =$api->getAll();
    }
    else if(isset($_GET['get-item'])){
        $id = $_GET['get-item'];
    
        if($id == ''){
            echo json_encode(['statuscode' => 400, 
                                'response' => 'No hay valor para id']);    
        }else{
            $api = new ApiLadrillos();
            $item = $api->getBrickById($id);
            echo json_encode(['item' => $item]);
            
        }
    }
    /*//Cambiar ladrillo de propietario y cambiar estado a vendido
    $idLadrillo=1;
    $nombre='Pedro';
    //$api->sendBrick($idLadrillo,$nombre);
    //Mostrar un elemento por id
    //$api->getBrickById($idLadrillo);
    //Insertar un nuevo elemento
    $propietario='Carlo';
    $propiedad='Colima';
    $valor=2500;
    $estado='venta';

            $item = array(
                'propietario' => $propietario,
                'propiedad' => $propiedad,
                'valor' => $valor,
                'estado' => $estado,   
            );
    //$api->addBrick($item);
    //Eliminar elemento
    $idLadrillo=2;
    //$api->deleteBrick($idLadrillo);*/
    
?>
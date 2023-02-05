
<?php
    include_once 'apipedidos.php';
    /*if(isset($_GET['mostrar'])){
        $api = new ApiPedidos();
        //Mostrar todos los elementos
        $items =$api->getAll();
        }
        else if(isset($_GET['get-item'])){
            $id = $_GET['get-item'];
        
            if($id == ''){
                echo json_encode(['statuscode' => 400, 
                                    'response' => 'No hay valor para id']);    
            }else{
                $api = new ApiPedidos();
                $item = $api->getPedidoById($id);
                echo json_encode(['statuscode' => 200,  'item' => $item]);
                
            }
        }*/
   $api = new ApiPedidos();
    //$items =$api->getAll();
    //Mostrar un elemento por id
    //$idLadrillo="Carlo";
    //$api->getPedidoById($idLadrillo);
    //Eliminar elemento
    //$idLadrillo="Carlo";
    //$api->deletePedido($idLadrillo);
    //Insertar un nuevo elemento
    $api = new ApiPedidos();
    $propietario='Carlo';
    $idLadrillo=4;
            $item = array(
                'propietario' => $propietario,
                'idLadrillo' => $idLadrillo, 
            );
    $api->addProducto($item);



    
?>
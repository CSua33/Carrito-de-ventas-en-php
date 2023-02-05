<?php

include_once 'carrito.php';

class ApiPedidos{


    function getAll(){
        $pedido = new Carrito();
        $items=[];

        $res = $pedido->obtenerProductos();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=[
                    "idPedido" => $row['idPedido'],
                    "propietario" => $row['propietario'],
                    "idLadrillo" => $row['idLadrillo'],
                    "Date_Created" => $row['Date_Created'],
                ];
                array_push($items, $item);
            }
            echo json_encode(['statuscode' => 200,'items' =>$items]);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getPedidoById($propietario){
        $pedido = new Carrito();
        $items=[];

        $res = $pedido->obtenerProductos();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=[
                    "idPedido" => $row['idPedido'],
                    "propietario" => $row['propietario'],
                    "idLadrillo" => $row['idLadrillo'],
                    "Date_Created" => $row['Date_Created'],
                ];
                array_push($items, $item);
            }
        
            echo json_encode(['statuscode' => 200,'items' =>$items]);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function addProducto($item){
        $pedido = new Carrito();
        $res = $pedido->nuevoProducto($item);
    }
    function deletePedido($item){
        $pedido = new Carrito();
        $res = $pedido->eliminarPedido($item);
    }

}

?>
<?php

include_once 'carrito.php';

class ApiPedidos{


    function getAll(){
        $pedido = new Carrito();
        $pedidos = array();
        $pedidos["items"] = array();

        $res = $pedido->obtenerProductos();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "idPedido" => $row['idPedido'],
                    "idUsuario" => $row['idUsuario'],
                    "idLadrillo" => $row['idLadrillo'],
                    "Date_Created" => $row['Date_Created'],
                );
                array_push($pedidos["items"], $item);
            }
        
            echo json_encode($pedidos);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }

    function getPedidoById($idUsuario){
        $pedido = new Carrito();
        $pedidos = array();
        $pedidos["items"] = array();

        $res = $pedido->obtenerProducto($idUsuario);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(
                "idPedido" => $row['idPedido'],
                "idUsuario" => $row['idUsuario'],
                "idLadrillo" => $row['idLadrillo'],
                "Date_Created" => $row['Date_Created'],
            );
            array_push($pedidos["items"], $item);
            $this->printJSON($pedidos);
        }
        else{
            echo "Esta vaina no funciona";
        }
    }

    function printJSON($array){
        echo '<code>'.json_encode($array).'</code>';
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
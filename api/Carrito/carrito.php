<?php

include_once '../../Conexion/db.php';
class Carrito extends DB{
    
    function obtenerProductos(){
        $query = $this->connect()->query('SELECT * FROM carrito');
        return $query;
    }
    function obtenerProducto($propietario){
        $query = $this->connect()->prepare('SELECT * FROM carrito WHERE propietario = :propietario');
        $query->execute(['propietario' => $propietario]);
        return $query;
    }
    function nuevoProducto($pedido){
        $query = $this->connect()->prepare('INSERT INTO carrito (propietario,idLadrillo) VALUES (:propietario,:idLadrillo)');
        $query->execute(['propietario' => $pedido['propietario'], 'idLadrillo' => $pedido['idLadrillo']]);
        return $query;
    }
    function eliminarPedido($propietario){
        $query = $this->connect()->query("DELETE FROM carrito WHERE propietario='$propietario'");
        return $query;
    }
  


}

?>
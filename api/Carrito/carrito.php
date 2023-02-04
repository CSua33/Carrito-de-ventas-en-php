<?php

include_once '../../Conexion/db.php';
class Carrito extends DB{
    
    function obtenerProductos(){
        $query = $this->connect()->query('SELECT * FROM carrito');
        return $query;
    }
    function obtenerProducto($idUsuario){
        $query = $this->connect()->prepare('SELECT * FROM carrito WHERE idUsuario = :idUsuario');
        $query->execute(['idUsuario' => $idUsuario]);
        return $query;
    }
    function nuevoProducto($pedido){
        $query = $this->connect()->prepare('INSERT INTO carrito (idUsuario,idLadrillo) VALUES (:idUsuario,:idLadrillo)');
        $query->execute(['idUsuario' => $pedido['idUsuario'], 'idLadrillo' => $pedido['idLadrillo']]);
        return $query;
    }
    function eliminarPedido($idUsuario){
        $query = $this->connect()->query("DELETE FROM carrito WHERE idUsuario='$idUsuario'");
        return $query;
    }
    public function getItemsByCategory($category){
        $query = $this->connect()->prepare('SELECT * FROM items WHERE categoria = :cat LIMIT 0,12');
        $query->execute(['cat' => $category]);
        $items = [];
        
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
            $item = [
                    'id'        => $row['id'],
                    'nombre'    => $row['nombre'],
                    'precio'    => $row['precio'],
                    'categoria' => $row['categoria'],
                    'imagen'    => $row['imagen']
                    ];
            array_push($items, $item);
        }
        return $items;
    }


}

?>
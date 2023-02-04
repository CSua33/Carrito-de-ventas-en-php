<?php

include_once '../../Conexion/db.php';
class Ladrillo extends DB{
    
    function obtenerLadrillos(){
        $query = $this->connect()->query('SELECT * FROM ladrillo');
        return $query;
    }
    function obtenerLadrillo($idLadrillo){
        $query = $this->connect()->prepare('SELECT * FROM ladrillo WHERE idLadrillo = :idLadrillo');
        $query->execute(['idLadrillo' => $idLadrillo]);
        return $query;
    }
    function ladrilloVendido($idLadrillo,$nombre){
        $query = $this->connect()->query("UPDATE ladrillo SET propietario='$nombre',estado='vendido' WHERE idLadrillo='$idLadrillo'");
        return $query;
    }
    function nuevoLadrillo($ladrillo){
        $query = $this->connect()->prepare('INSERT INTO ladrillo (propietario,propiedad,valor,estado) VALUES (:propietario,:propiedad,:valor,:estado)');
        $query->execute(['propietario' => $ladrillo['propietario'], 'propiedad' => $ladrillo['propiedad'], 'valor' => $ladrillo['valor'], 'estado' => $ladrillo['estado']]);
        return $query;
    }
    function eliminarLadrillo($idLadrillo){
        $query = $this->connect()->query("DELETE FROM ladrillo WHERE idLadrillo='$idLadrillo'");
        return $query;
    }


}

?>
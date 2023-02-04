<?php

include_once 'ladrillo.php';

class ApiLadrillos{


    function getAll(){
        $ladrillo = new Ladrillo();
        $items=[];

        $res = $ladrillo->obtenerLadrillos();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=[
                    "idLadrillo" => $row['idLadrillo'],
                    "propietario" => $row['propietario'],
                    "propiedad" => $row['propiedad'],
                    "valor" => $row['valor'],
                    "estado" => $row['estado'],
                ];
                array_push($items, $item);
            }
        
            echo json_encode(['statuscode' => 200,'items' =>$items]);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
    function sendBrick($idLadrillo,$nombre){
        $ladrillo = new Ladrillo();
        $res = $ladrillo->ladrilloVendido($idLadrillo,$nombre);
    }
    function getBrickById($idLadrillo){
        $ladrillo = new Ladrillo();
        $ladrillos = array();
        $ladrillos["items"] = array();

        $res = $ladrillo->obtenerLadrillo($idLadrillo);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(
                "idLadrillo" => $row['idLadrillo'],
                "propietario" => $row['propietario'],
                "propiedad" => $row['propiedad'],
                "valor" => $row['valor'],
                "estado" => $row['estado'],
            );
            array_push($ladrillos["items"], $item);
            $this->printJSON($ladrillos);
        }
        else{
            echo "Esta vaina no funciona";
        }
    }

    function printJSON($array){
        echo '<code>'.json_encode($array).'</code>';
    }

    function addBrick($item){
        $ladrillo = new Ladrillo();
        $res = $ladrillo->nuevoLadrillo($item);
    }
    function deleteBrick($item){
        $ladrillo = new Ladrillo();
        $res = $ladrillo->eliminarLadrillo($item);
    }
    

}

?>
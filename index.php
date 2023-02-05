<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        //include_once('layout/menu.php');
    ?>

    <main>
        <?php
        $response = json_decode(file_get_contents('http://localhost/backendChallenge100Ladrillos/backendChallenge100Ladrillos/api/Ladrillos/index.php?mostrar'),true);
        //var_dump($response);
       
            foreach($response['items'] as $item){
                include('layout/items.php');
            }

        ?>
        <button  type="button" class="btn btn-primary btn-lg btn-block" onclick="comprar()">Comprar</button>
    </main>

    <script >
        let array=new Set();
    </script>
    <script >
    function comprar() {
        let arreglo=[];
        let objeto = {};
        arreglo=Array.from(array);
        //Este hash tiene como finalidad eliminar objetos repetidos en el arreglo
        //no funciona correctamente
        //hay que cambiar el hash set por un hash map ya que hash set no tiene dos elementos
        //como tal
        var hash = {};
        arreglo = arreglo.filter(function(current) {
        var exists = !hash[current.id];
        hash[current.id] = true;
        return exists;
        });

        console.log(arreglo);
        objeto.arreglo = arreglo;
        let result = JSON.stringify(objeto);
        console.log(result);  
    }   
    </script>
</body>
</html>

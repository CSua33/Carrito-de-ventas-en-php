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
        $response = json_decode(file_get_contents('http://localhost/backendChallenge100Ladrillos/backendChallenge100Ladrillos/index.php'),true);
        var_dump($response);
       
            foreach($response['items'] as $item){
                include('layout/items.php');
            }

        ?>

    <main>

        
    </main>

   
</body>
</html>

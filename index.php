<?php

require_once __DIR__ . '/models/prodotti.php';
// require_once __DIR__ . '/models/canGat.php';
require_once __DIR__ . '/models/tipo.php';
require_once __DIR__ . '/dbb.php';

var_dump($cucciaRossa)
// $avengers = new Movie('avengers', new Generi('maiale', 'porco', 'suino'), '2:30');
// $titanic = new Movie('titanic', new Generi('cavallo', 'giumenta', 'pony'), '3:00');
// var_dump($avengers , $titanic);
// echo $avengers->titolo;
// echo $avengers->generi->genere1;
// echo $avengers->generi->genere2;
// echo $avengers->generi->genere3;
// echo $avengers->durata;

// echo $titanic->titolo;
// echo $titanic->generi->genere1;
// echo $titanic->generi->genere2;
// echo $titanic->generi->genere3;
// echo $titanic->durata;


// echo $titanic -> mario('titanic');
// var_dump($titanic);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display:flex; justify-content:center;">
        <?php foreach( $arrayProdotti as $elem ) { ?>
            <div style="margin:40px">
                <h2 style="color:red"><?php echo $elem->nome; ?></h2>
                <h3>Prezzo: <?php echo $elem->prezzo; ?></h3>
                <h4>Marca: <?php echo $elem->marca; ?></h4>
                <h5>Tipo: <?php echo $elem->tipo->tipo; ?></h5>
                <h5>Per: <?php echo $elem->caneGatto; ?></h5>
            </div>
        <?php } ?>    
    </div>
</body>
</html>

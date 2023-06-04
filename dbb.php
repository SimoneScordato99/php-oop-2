<?php
require_once __DIR__ . '/models/prodotti.php';
require_once __DIR__ . '/models/tipo.php';
require_once __DIR__ . '/models/canGat.php';


$arrayProdotti = [
    $cucciaRossa = new CanGatto('cucciaRossa', '19.99$', 'CAnnosi', new Tipo('cuccia'), 'cane'),
    $guinzaglioBlu = new CanGatto('guinzaglioBlu', '20.50$', 'Gattini coccolosi s.r.l', new Tipo('guinzaglio'), 'gatto'),
    $croccGatto = new CanGatto('Croccantini per gatto', '50.50$', 'Gattini coccolosi s.r.l', new Tipo('cibo'), 'gatto'),
    
];
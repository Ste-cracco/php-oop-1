<?php

class Film {
    public $id;
    public $titolo;
    public $lingua;
    public $anno;
    public $voto;

    // Costruttore
    function __construct( $id, $titolo, $lingua, $anno, $voto) {
        $this->id = $id;
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->setAge($anno);
        $this->setVote($voto);
    }

    // Funzioni 
    public function setAge($anno) {
        if(is_int($anno)) {
            $this->anno = $anno;
        } else {
            $this->anno = 'Il valore di $anno deve essere un numero intero';
        }
    }

    public function setVote($voto) {
        if($voto >= 0 && $voto <= 5) {
            $this->voto = $voto;
        } else {
            $this->voto = 'Il valore di $voto deve essere compreso tra 0 e 5';
        }
    }
    // Fine Funzioni 
}

$titanic = new Film(01, 'Titanic', 'EN-us', 1998, 4.3);
$django = new Film(02, 'Django', 'EN-us', 1996, 4.1);

var_dump($titanic);

foreach($titanic as $film) {
    echo $film, '---';
}

foreach($django as $film) {
    echo $film, '---';
}

?>

<ul>
    <?php
        foreach($titanic as $film) {
            ?>
                <li> 
                    <p> <?= $film['id'] ?> </p> 
                    <p> <?= $film['titolo'] ?> </p> 
                    <p> <?= $film['lingua'] ?> </p> 
                    <p> <?= $film['anno'] ?> </p> 
                    <p> <?= $film['voto'] ?> </p>             
                </li>
            <?php
        }
    ?>    
</ul>

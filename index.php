
<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

*/

    // - è definita una classe ‘Movie’
    //=> all'interno della classe sono dichiarate delle variabili d'istanza
class Movie {

    public $titolo;
    public $dataDiUscita;
    public $regista;

    // => all'interno della classe è definito un costruttore
    function __construct($_titolo){
        $this -> titolo = $_titolo;
    }


    // => all'interno della classe è definito almeno un metodo

    public function titolo($_titolo){
        $this->titolo = $_titolo;
    }

    public function titoloMovie(){
        return $this->titolo;
    }

    public function dataUscita($_dataDiUscita){
        $this->dataDiUscita = $_dataDiUscita;
    }

    public function dataUscitaMovie(){
        return $this->dataDiUscita;
    }

    public function regista($_regista){
        $this->regista = $_regista;
    }

    public function registaMovie(){
        return $this->regista;
    }

}

// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

$film1 = new Movie('');
$film1->titolo( 'Animali Fantastici: I Segreti di Silente');
$film1->dataUscita('13 Aprile 2022 ');
$film1->regista(' David Yates');


$title = $film1 -> titoloMovie();
$date = $film1->dataUscitaMovie() ;
$director =$film1->registaMovie();

echo  "Il film " . $title . " è uscito il  " . $date . " ed è stato diretto da " . $director . "<br>";


$film2 = new Movie('');
$film2->titolo( 'Doctor Strange nel Multiverso della Follia');
$film2->dataUscita('04 Maggio 2022 ');
$film2->regista(' Sam Raimi');


$title = $film2 -> titoloMovie();
$date = $film2->dataUscitaMovie() ;
$director =$film2->registaMovie();

echo  "Il film " . $title . " è uscito il  " . $date . " ed è stato diretto da " . $director;


?>











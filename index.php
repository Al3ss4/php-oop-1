
<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore

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

?>











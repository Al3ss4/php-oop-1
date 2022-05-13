
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

    // => all'interno della classe è definito un costruttore
    function __construct($_titolo, $_dataDiUscita){
        $this -> titolo = $_titolo;
        $this -> dataDiUscita = $_dataDiUscita;
    }


}

?>
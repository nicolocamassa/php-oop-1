<?php 
    class Movie{
        public $name;
        public $year;
        public $genre;
        public $adults;

        function __construct($_name, $_year, $_genre){
            $this->name = $_name;
            $this->year = $_year;
            $this->genre = $_genre;
        }
    }

    $film_1 = new Movie('DemoA', 2000, 'DemoB');
    $film_1->adults = 'Sì';

    echo $film_1->name.' ';
    echo $film_1->year.' ';
    echo $film_1->genre.' ';
    echo $film_1->adults;
?>
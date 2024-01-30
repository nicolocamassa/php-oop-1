<?php 
    class Movie{
        public $name;
        public $year;
        public $genres;
        public $adults;

        function __construct($_name, $_year, $_genre){
            $this->name = $_name;
            $this->year = $_year;
            $this->genres = $_genre;
        }

        public function setAdultsCalculate($genres){
            $this->adults = in_array('Horror', $genres);
        }

        public function getAdultsCalculate(){
            return $this->adults ? 'Solo maggiorenni' : 'Tutte le età';
        }
    }

    $film_1 = new Movie('DemoA', 2000, ['Horror', 'Thriller']);
    $film_1->setAdultsCalculate($film_1->genres);

    echo $film_1->name.' ';
    echo $film_1->year.' ';
    echo implode(', ', $film_1->genres).' ';
    echo $film_1->getAdultsCalculate();

    echo '<br>';
    $film_2 = new Movie('DemoC', 2010, ['Drammatico']);
    $film_2->setAdultsCalculate($film_2->genres);

    echo $film_2->name.' ';
    echo $film_2->year.' ';
    echo implode(', ', $film_2->genres).' ';
    echo $film_2->getAdultsCalculate();
?>
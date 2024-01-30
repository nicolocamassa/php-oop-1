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

        public function setAdultsCalculate($genre){
            if($genre == 'Horror'){
                $this->adults = 'Solo maggiorenni';
            }else{
                $this->adults = 'Tutte le età';
            }
        }

        public function getAdultsCalculate(){
            return $this->adults;
        }
    }

    $film_1 = new Movie('DemoA', 2000, 'Horror');
    $film_1->setAdultsCalculate($film_1->genre);

    echo $film_1->name.' ';
    echo $film_1->year.' ';
    echo $film_1->genre.' ';
    echo $film_1->getAdultsCalculate();
?>
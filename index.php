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

    $film_1->name.' ';
    $film_1->year.' ';
    implode(', ', $film_1->genres).' ';
    $film_1->getAdultsCalculate();

    $film_2 = new Movie('DemoC', 2010, ['Drammatico']);
    $film_2->setAdultsCalculate($film_2->genres);
    $film_2->name.' ';
    $film_2->year.' ';
    implode(', ', $film_2->genres).' ';
    $film_2->getAdultsCalculate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php  echo $film_1->name.' ';?></li>
        <li><?php  echo $film_1->year.' ';?></li>
        <li><?php  echo implode(', ', $film_1->genres).' ';?></li>
        <li><?php  echo $film_1->getAdultsCalculate(); ?></li>
    </ul>
    <ul>
        <li><?php  echo $film_2->name.' ';?></li>
        <li><?php  echo $film_2->year.' ';?></li>
        <li><?php  echo implode(', ', $film_2->genres).' ';?></li>
        <li><?php  echo $film_2->getAdultsCalculate(); ?></li>
    </ul>
</body>
</html>
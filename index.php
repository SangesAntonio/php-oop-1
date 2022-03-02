<?php
class Movie
{
    public $name;
    public $director;
    public $description;
    public $id;
    public $genre;
    public $review;

    function __construct($_name, $_director, $_description, $_id, $_genre)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->description = $_description;
        $this->id = $_id;
        $this->genre = $_genre;
    }
    public function setRate($rate)
    {
        if ($rate > 5) {
            $this->review = 'Good';
        } else {
            $this->review = 'Bad';
        }
    }
    public function getrate()
    {
        return $this->review;
    }
}

$description1 = 'A seguito di una rapina andata male, i membri di una banda iniziano a sospettare l\'uno dell\'altro perchè sembra che qualcuno abbia parlato più del dovuto.';

$description2 = 'Kevin, affetto da un disturbo da personalità multipla, rapisce tre adolescenti. Per avere una possibilità di sopravvivenza, le ragazze devono riuscire a fuggire prima che l\'uomo impazzisca definitivamente.';


$movie1 = new Movie('Le iene', 'Quentin tarantino', $description1, '01', 'drammatico');
$movie2 = new Movie('Split', 'M. Night Shyamalan', $description2, '02', 'Thriller');


var_dump($movie2);
$movie1->setRate(4);
echo $review_movie1 = $movie1->getrate();

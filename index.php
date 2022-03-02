<?php
class Movie
{
    public $name;
    public $director;
    public $description;
    public $id;

    function __costruct($_name, $_director, $_description, $_id)
    {
        $this->name = $_name;
        $this->director = $_director;
        $this->description = $_description;
        $this->id = $_id;
    }
}

$description1 = 'A seguito di una rapina andata male, i membri di una banda iniziano a sospettare l\'uno dell\'altro perchè sembra che qualcuno abbia parlato più del dovuto.';

$description2 = 'Kevin, affetto da un disturbo da personalità multipla, rapisce tre adolescenti. Per avere una possibilità di sopravvivenza, le ragazze devono riuscire a fuggire prima che l\'uomo impazzisca definitivamente.';


$movie1 = new Movie('Le iene', 'Quentin tarantino', $description1, '01');
$movie2 = new Movie('Split', 'M. Night Shyamalan', $description2, '02');

var_dump($movie2);

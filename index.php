<?php
header('Content-Type: text/html; charset=utf-8');
require_once 'cat.php' ;
require_once 'dog.php' ;

$pet1 = new Cat('Владислав', 'Сфинкс');
$pet1->display();

$pet2 = new Dog('Суетлана', 'Мирная');
$pet2->display();


?>
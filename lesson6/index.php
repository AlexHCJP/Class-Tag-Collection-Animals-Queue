<!DOCTYPE html>

<?php

include_once ('autoload.php');

//$app = new Collection([]);
//$app->name = 'Tester';
//$app->timezone = "UTC+6";
//$app->lang = 'ru_RU';
//
//
//$ul = Tag::ul();
//
//foreach ($app as $key => $value){
//    Tag::li()->appendTo($ul)->appendBody($key . ' ' .$value);
//}
//
//echo $ul;

$q = new Queue();
$q->add('13');
$q->add('31');
$q->add('82');

foreach ($q as $key => $value)
{

    echo $key . ' ' . $value . "<br>";
}
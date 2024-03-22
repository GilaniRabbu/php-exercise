<?php
class Phone
{
    var $model;
    function phoneModel($number)
    {
        global $model;
        $model = $number;
        echo "This is $model \n";
    }
}

$apple = new Phone;
$apple->phoneModel("iPhone 15 Pro");

$samsung = new Phone;
$samsung->phoneModel("Galaxy S24 Ultra");
?>
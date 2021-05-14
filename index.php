<?php

include_once "/var/www/html/TH_TK_INTERFACE_COMPARABLE_SS_CLASS_HH/Circle/CircleComparator.php";
include_once "/var/www/html/TH_TK_INTERFACE_COMPARABLE_SS_CLASS_HH/Circle/Circle.php";

$circleOne = new Circle("circleOne",6);
$circleTwo = new Circle("circleTwo",4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne,$circleTwo));

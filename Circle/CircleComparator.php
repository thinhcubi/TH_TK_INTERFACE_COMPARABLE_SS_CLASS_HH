<?php

include_once "/var/www/html/TH_TK_INTERFACE_COMPARABLE_SS_CLASS_HH/InterfaceComparator.php";

class CircleComparator implements InterfaceComparator
{
    public function compare(object $circleOne, object $circleTwo): int
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();

        if ($radiusOne > $radiusTwo) {
            return 1;
        } else if ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}

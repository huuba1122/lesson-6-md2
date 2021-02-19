<?php
include_once "Circle.php";
include_once "Comparable.php";

class ComparableCircle extends Circle implements Comparable{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }
    public function compareTo($circleOther)
    {
        $circleOtherRadius = $circleOther->getRadius();// TODO: Implement compareTo() method.
        if ($this->getRadius() > $circleOtherRadius){
            return 1;
        }
        elseif ($this->getRadius() <$circleOtherRadius){
            return  -1;
        }else{
            return 0;
        }
    }
}
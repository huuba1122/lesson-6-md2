<?php
include_once "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne',8);
$circleTwo = new ComparableCircle('circleTwo',2);
$circleThree = new ComparableCircle('circleThree',4);
$test = $circleThree->compareTo($circleTwo);
echo ('Compparable: <br>');
echo $test;
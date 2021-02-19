<?php

include_once "Shape.php";
include_once "ResizeAble.php";
class Rectangle extends Shape implements Resizeable {
    public $width;
    public $height;
    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }
    public function calculatePerimeter(){
        return ($this->height + $this->width)*2;
    }
    public function resize($percent)
    {
      return $this->calculateArea()*(1+$percent/100);   // TODO: Implement resize() method.
    }
}

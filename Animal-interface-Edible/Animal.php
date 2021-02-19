<?php


/**     tao mot abstract class co ten Animal    */
abstract class Animal{
    abstract function makeSound();
}


/**     tao mot interface co ten Edible */
interface Edible{
    function howtoEat();
}

/** tao class Chicken ke thua lop abstract Animal va implements interface Edible */
class Chicken extends Animal implements Edible {
    public function makeSound()
    {
        return "Chicken: cluck-cluck!";// TODO: Implement makeSound() method.
    }
    public function howtoEat()
    {
        return"could be fried";// TODO: Implement howtoEat() method.
    }
}


/** tao class Tiger ke thua lop abstract Animal */
class Tiger extends Animal{
    function makeSound()
    {
        return "Tiger: roarrrr!";// TODO: Implement makeSound() method.
    }
}

/**  tao mot interface con Fruit ke thua interface Edible */
abstract class Fruit implements Edible{

}

/** tao class Apple trien khai interface Fruit*/
class Apple extends Fruit{
    function howtoEat()
    {
        return "Apple could be slided";// TODO: Implement howtoEat() method.
    }
}

/** tao class Orange trien khai interface Fruit*/
class Orange extends Fruit{
    function howtoEat()
    {
        return "Orange could be juiced";// TODO: Implement howtoEat() method.
    }
}


/**     test abstractClass   */
//echo "---test abstractClass--- <br>";
//echo "------------Animals <br>";
$animals[0] = new Tiger();
$animals[1] = new Chicken();

//foreach ($animals as $animal){
//    echo $animal->makeSound(). "<br>";
//}

/**     test implements interface   */
echo "test implements interface <br>";
foreach ($animals as $animal){
    echo $animal->makeSound()."<br>";
    if ($animal instanceof Chicken){
        echo $animal->howtoEat(). "<br> ";
    }
}
echo "-------Fruits <br>";
$fruits[0]=  new Apple();
$fruits[1] = new Orange();
foreach ($fruits as $fruit){
    echo $fruit->howtoEat()."<br>";
}



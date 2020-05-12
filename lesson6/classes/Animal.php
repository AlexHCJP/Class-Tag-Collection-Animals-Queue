<?php
interface CanEat {
    function eat();
}
interface CanFly {
    function fly();
}
interface CanSleep {
    function sleep();
}
interface CanHunt {
    function hunt();
}
interface CanShedSkin
{
    function shedSkin();
}
interface CanMove{
    function Move();
}
interface CanBreathe{
    function breathe();
}
interface CanMultiply{
    function multiply();
}
interface CanDie{
    function multiply();
}
interface CanSwim{
    function swim();
}

interface AnimalInterface extends CanEat, CanSleep, CanMove, CanBreathe, CanMultiply, CanDie {}
interface BirdInterface extends AnimalInterface, CanFly {}
interface PredatorInterface extends AnimalInterface, CanHunt {}
interface ReptilesInterface extends AnimalInterface, CanShedSkin {}
interface WaterInterface extends AnimalInterface, CanSwim{}
class Bird implements BirdInterface {

    function eat()
    {
        // TODO: Implement eat() method.
    }

    function fly()
    {
        // TODO: Implement fly() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Eagle implements BirdInterface, CanHunt {
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function fly()
    {
        // TODO: Implement fly() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Wolf implements PredatorInterface {
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Lizards implements ReptilesInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function shedSkin()
    {
        // TODO: Implement shedSkin() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Tireks implements ReptilesInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function shedSkin()
    {
        // TODO: Implement shedSkin() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Human implements PredatorInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Cat implements PredatorInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Lion implements PredatorInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Dog implements PredatorInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }
}
class Clown implements WaterInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }

    function swim()
    {
        // TODO: Implement swim() method.
    }
}
class Kit implements  WaterInterface{
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }

    function swim()
    {
        // TODO: Implement swim() method.
    }
}
class Shark implements WaterInterface, CanHunt {
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }

    function swim()
    {
        // TODO: Implement swim() method.
    }
}
class MyAnimal implements WaterInterface, CanHunt, CanFly, CanShedSkin {
    function eat()
    {
        // TODO: Implement eat() method.
    }

    function fly()
    {
        // TODO: Implement fly() method.
    }

    function sleep()
    {
        // TODO: Implement sleep() method.
    }

    function hunt()
    {
        // TODO: Implement hunt() method.
    }

    function shedSkin()
    {
        // TODO: Implement shedSkin() method.
    }

    function Move()
    {
        // TODO: Implement Move() method.
    }

    function breathe()
    {
        // TODO: Implement breathe() method.
    }

    function multiply()
    {
        // TODO: Implement multiply() method.
    }

    function swim()
    {
        // TODO: Implement swim() method.
    }
}

<?php
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    die;
}

class Animal
{
    private $name;
    protected $energy = 10;
    public static $animalCount = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$animalCount++;
    }

    public function run(): void
    {
        $this->energy--;
    }
    public function eat(): void
    {
        $this->energy++;
    }
}

class Cat extends Animal
{

}

class Dog extends Animal
{
    public static $dogCount = 0;

    public function __construct(string $name)
    {
        self::$dogCount++;
        parent::__construct($name);
    }
    public function eat(): void
    {
        $this->energy += 2;
    }
}

echo Animal::$animalCount . '<br>';
echo Dog::$animalCount . '<br>';
echo Cat::$animalCount . '<br>';
$muris = new Cat('Muris');
$muris->run();
echo Animal::$animalCount . '<br>';
echo $muris::$animalCount . '<br>';

new Dog('Reksis');
new Dog('Reksis');
new Dog('Reksis');
$reksis = new Dog('Reksis');
$reksis->eat();
echo Animal::$animalCount . '<br>';
echo $reksis::$animalCount . '<br>';
echo Dog::$dogCount . '<br>';

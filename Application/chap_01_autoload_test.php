<?php 
require __DIR__ . '/../Application/Autoload/Loader.php';
Application\Autload\Loader::init(__DIR__ . '/..');

$test = new Application\Test\TestClass();
echo $test->getTest();

$fake = new Application\Test\FakeClass();
echo $fake->getTest();

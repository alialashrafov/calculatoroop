<?php 

require 'classes/calculator.php';

require 'classes/OperatorInterface.php';
require 'classes/Adder.php';
require 'classes/Subtractor.php';
require 'classes/Multiplier.php';
require 'classes/Divider.php';


$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(10, 50); // 60

$c->setOperation(new Subtractor);
$c->calculate(30); // 30

$c->setOperation(new Multiplier);
$c->calculate(5); //250

$c->setOperation(new Divider);
$c->calculate(2); //75


echo $c->getResult();


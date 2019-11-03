<?php

require 'Number.php';
require 'EvenNumber.php';

$example1 = new Number(20);
var_dump($example1->getHalf());

$example2 = new EvenNumber(20);
var_dump($example2->getHalf());

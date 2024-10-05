<?php

require_once('./FordFactory.php');
require_once('./CitroenFactory.php');
require_once('./company-factory.php');

$fordFactory = new FordFactory();
$citroenFactory = new CitroenFactory();

$fordFactory->createCamion()->correr();
$citroenFactory->createCamion()->correr();

$fordFactory->createCoche()->correr();
$citroenFactory->createCoche()->correr();
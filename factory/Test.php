<?php

require_once('./Vehiculo.php');
require_once('./Coche.php');
require_once('./Camion.php');
require_once('./Creator.php');
require_once('./CreadorCamion.php');
require_once('./CreadorCoche.php');

$creatorCamion = new CreadorCamion();

$creatorCamion->transportar();

$creatorCoche = new CreadorCoche();

$creatorCoche->transportar();
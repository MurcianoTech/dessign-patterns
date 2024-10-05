<?php

require_once('./camionInterface.php');

class CamionCitroen implements CamionInterface {


    public function correr() {
        var_dump("Correr CamionCitroen");
    }
}
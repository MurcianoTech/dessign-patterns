<?php

require_once('./camionInterface.php');

class CamionFord implements CamionInterface {


    public function correr() {
        var_dump("Correr CamionFord");
    }
}
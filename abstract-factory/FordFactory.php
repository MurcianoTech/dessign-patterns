<?php

require_once('./company-factory.php');
require_once('./CamionFord.php');
require_once('./CocheFord.php');

class FordFactory implements CompanyFactory {
    public function createCamion(): CamionInterface{
        return new CamionFord();
    }

    public function createCoche(): CocheInterface {
        return new CocheFord();
    }
}
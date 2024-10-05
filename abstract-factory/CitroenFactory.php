<?php

require_once('./company-factory.php');
require_once('./CamionCitroen.php');
require_once('./CocheCitroen.php');

class CitroenFactory implements CompanyFactory {
    public function createCamion(): CamionInterface{
        return new CamionCitroen();
    }

    public function createCoche(): CocheInterface {
        return new CocheCitroen();
    }
}
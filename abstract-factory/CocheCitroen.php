<?php

require_once('./cocheInterface.php');

class CocheCitroen implements CocheInterface {

    public function correr()
    {
        var_dump("CocheCitroen");
    }
}
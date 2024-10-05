<?php

require_once('./cocheInterface.php');

class CocheFord implements CocheInterface {

    public function correr()
    {
        var_dump("CocheFord");
    }
}
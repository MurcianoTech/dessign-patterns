<?php

class CreadorCamion extends Creator {

    public function create(): Vehiculo
    {
        return new Camion();
    }
}
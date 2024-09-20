<?php

class CreadorCoche extends Creator {

    public function create(): Vehiculo
    {
        return new Coche();
    }
}
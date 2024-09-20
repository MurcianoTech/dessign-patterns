<?php

class Coche implements Vehiculo {

    public function reparto(): void
    {
        var_dump("El coche está en reparto");
    }

    public function entregado(): void
    {
        var_dump("El coche ha entregado el paquete");
    }
}
<?php

class Camion implements Vehiculo{

    public function reparto(): void
    {
        var_dump("El camion está en reparto");
    }

    public function entregado(): void
    {
        var_dump("El camion ha entregado el paquete");
    }
}
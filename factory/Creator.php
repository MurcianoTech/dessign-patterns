<?php

abstract class Creator {

    abstract public function create(): Vehiculo;

    public function transportar(): void
    {
        $creator = $this->create();

        $creator->reparto();

        $creator->entregado();
    }
}
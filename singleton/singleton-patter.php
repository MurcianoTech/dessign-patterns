<?php

/**
 * Proporciona una única instancia global de la clase que es accesible desde 
 * todo el contexto de la aplicación.
 */

class SingletonPattern {

    private static ?SingletonPattern $instance = null;

    public static function getInstance(): self 
    {
        if (null === self::$instance) {
            return new SingletonPattern();
        }

        return self::$instance;
    }

    private function __construct() {
        // Codigo necesario
    }
}
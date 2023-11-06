<?php

class Singleton
{
    private static ?Singleton $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Singleton
    {
        if (self::$instance == null) {
            self::$instance = new Singleton;
        }
        return self::$instance;
    }


    private function __clone()
    {
    }
}

// Example usage:
$singleton = Singleton::getInstance();
print_r($singleton);
?>
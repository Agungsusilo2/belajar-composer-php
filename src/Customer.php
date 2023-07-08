<?php

namespace ProgrammerZamanNow\Belajar;

class Customers{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function sayHello(string $name):string{
        return "Hello $name, my names is $this->name";
    }
}
<?php
namespace programmerzamannow\belajar;
class custamer{
    public function __construct(private string $name) {
    }
    public function sayHello(string $name): string{
        return "Hello $name, my name is $this->name";
    }
} 
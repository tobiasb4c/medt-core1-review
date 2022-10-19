<?php

namespace Webt\MedtCore1Review;

class AbstractLogger
{
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
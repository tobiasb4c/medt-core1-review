<?php

namespace Webt\MedtCore1Review;

class AbstractFood
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
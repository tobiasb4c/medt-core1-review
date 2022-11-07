<?php

namespace Webt\MedtCore1Review;

interface FoodInterface
{
    public function getName() : string;
    public function isVegetarian() : bool;
    public function getCalories() : int;
}
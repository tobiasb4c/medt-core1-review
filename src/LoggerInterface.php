<?php

namespace Webt\MedtCore1Review;

interface LoggerInterface
{
    public function getName();
    public function log(string $text);
}
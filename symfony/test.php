<?php

use Symfony\Component\String\Slugger\AsciiSlugger;

require 'vendor/autoload.php';

$slugger = new AsciiSlugger();
echo $slugger->slug('Стойността трябва');

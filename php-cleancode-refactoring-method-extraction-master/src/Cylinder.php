<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = $this->getBaseArea($radius);
        $perimeter = $this->getPerimeter($radius);
        $volume = $perimeter * $height + 2 * $baseArea;
        return $volume;
    }

    public function getPerimeter($radius)
    {
        $perimeter = pi() * $radius * $radius;
        return $perimeter;
    }

    public function getBaseArea($radius)
    {
        $baseArea = 2 * pi() * $radius;
        return $baseArea;
    }
}

$cylinder1 = new Cylinder();
echo $cylinder1->getVolume(3, 2) . '<br>';
echo $cylinder1->getPerimeter(5) . '<br>';
echo $cylinder1->getBaseArea(6) . '<br>';
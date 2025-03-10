<?php

namespace Tests;

use App\Laptop;
use App\GPU;
use App\OLEDScreen;
use PHPUnit\Framework\TestCase;

class ComputerDecoratorTest extends TestCase
{
    public function testLaptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPU($laptop);

        $this->assertEquals(1200, $laptopWithGPU->getPrice()); // imaginons que le prix de base du Laptop est de 1200
        $this->assertEquals('Laptop, avec GPU', $laptopWithGPU->getDescription());
    }

    public function testLaptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreen($laptop);

        $this->assertEquals(1300, $laptopWithOLEDScreen->getPrice()); // pareil pour 1300
        $this->assertEquals('Laptop, avec écran OLED', $laptopWithOLEDScreen->getDescription());
    }

    public function testLaptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithGPUAndOLEDScreen = new OLEDScreen(new GPU($laptop));

        $this->assertEquals(1500, $laptopWithGPUAndOLEDScreen->getPrice()); // same pour 1500
        $this->assertEquals('Laptop, avec GPU, avec écran OLED', $laptopWithGPUAndOLEDScreen->getDescription());
    }
}
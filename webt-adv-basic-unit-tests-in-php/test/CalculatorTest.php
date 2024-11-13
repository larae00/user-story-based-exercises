<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Calculator.php';

class CalculatorTest extends TestCase {
    private $calculator;

    protected function setUp(): void {      //wird vor jedem Test ausgeführt
        $this->calculator = new Calculator();
    }

    public function testAdd() {
        
        $this->assertEquals(5, $this->calculator->add(2, 3), "Addition von 2 und 3 sollte 5 ergeben");
    }

    public function testSubstract() {
        
        $this->assertNotNull($this->calculator->substract(5, 10), "Das Ergebnis der Subtraktion sollte nicht null sein");
        $this->assertEquals(-5, $this->calculator->substract(5, 10), "Subtraktion von 10 von 5 sollte -5 ergeben");
    }

    public function testMultiply() {
        
        $this->assertEquals(10, $this->calculator->multiply(5, 2), "Multiplikation von 5 und 2 sollte 10 ergeben");
        $this->assertGreaterThan(0, $this->calculator->multiply(4, 3), "Multiplikation von positiven Zahlen sollte größer als 0 sein");
    }
}

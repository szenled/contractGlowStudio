<?php
/**
 * Tests for contractGlow
 */

use PHPUnit\Framework\TestCase;
use Contractglow\Contractglow;

class ContractglowTest extends TestCase {
    private Contractglow $instance;

    protected function setUp(): void {
        $this->instance = new Contractglow(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Contractglow::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

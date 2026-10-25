<?php
/**
 * Tests for ChainRough
 */

use PHPUnit\Framework\TestCase;
use Chainrough\Chainrough;

class ChainroughTest extends TestCase {
    private Chainrough $instance;

    protected function setUp(): void {
        $this->instance = new Chainrough(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainrough::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

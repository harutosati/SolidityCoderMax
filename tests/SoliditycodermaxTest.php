<?php
/**
 * Tests for SolidityCoderMax
 */

use PHPUnit\Framework\TestCase;
use Soliditycodermax\Soliditycodermax;

class SoliditycodermaxTest extends TestCase {
    private Soliditycodermax $instance;

    protected function setUp(): void {
        $this->instance = new Soliditycodermax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditycodermax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

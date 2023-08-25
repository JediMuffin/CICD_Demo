<?php
use PHPUnit\Framework\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        ob_start();
        include 'index.php';
        $output = ob_get_clean();
        $this->assertStringContainsString('This is a simple PHP website.', $output);
    }
}
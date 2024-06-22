<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Zoo\Lion;

final class LionTest extends TestCase
{
    private string $name = "Alex";
    private Lion $lion;

    public function setUp(): void
    {
        $this->lion = new Lion($this->name);
    }

    public function testName(): void
    {
        $this->assertSame($this->name, $this->lion->getName());
    }

    public function testType(): void
    {
        $type = 'Lion';
        $this->assertSame($type, $this->lion->getType());
    }
}


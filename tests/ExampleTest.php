<?php

use Example\TriggersDeprecation;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testNothing(): void
    {
        // this test doesn't trigger any errors
        $this->addToAssertionCount(1);
    }

    public function testIssuesDeprecation(): void
    {
        TriggersDeprecation::bang();
    }
}

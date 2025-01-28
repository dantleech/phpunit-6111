<?php

use Example\TriggersDeprecation;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testIssuesDeprecation(): void
    {
        TriggersDeprecation::bang();
    }
}

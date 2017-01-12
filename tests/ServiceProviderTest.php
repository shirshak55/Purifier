<?php

namespace LukeTowers\Tests\Purifier;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use LukeTowers\Purifier\Purifier;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    public function testPurifierIsInjectable()
    {
        $this->assertIsInjectable(Purifier::class);
    }
}
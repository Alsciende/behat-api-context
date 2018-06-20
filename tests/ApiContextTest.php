<?php

namespace Tests;

use Alsciende\Behat\ApiContext;
use PHPUnit\Framework\TestCase;
use Symfony\Component\BrowserKit\Client;

class ApiContextTest extends TestCase
{
    public function testCreation()
    {
        $client = $this->createMock(Client::class);
        $objectUnderTest = new ApiContext($client);
        $this->assertInstanceOf('Alsciende\Behat\ApiContext', $objectUnderTest);
    }
}

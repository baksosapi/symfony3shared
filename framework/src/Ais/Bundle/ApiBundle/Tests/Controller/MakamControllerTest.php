<?php

namespace Ais\Bundle\ApiBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MakamControllerTest extends WebTestCase
{
    public function testGetmakam()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getMakam');
    }

    public function testMakam()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/makam');
    }

}

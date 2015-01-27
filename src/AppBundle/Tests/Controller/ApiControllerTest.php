<?php

namespace Aec\ExchangeBundle\Tests\Rest;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RestApiTest extends WebTestCase
{
    public function testApiExample()
    {
        $client = static::createClient();
        $client->request(
            'GET',
            '/api/blob'
        );

        $json = json_decode($client->getResponse()->getContent(), true);

        $this->assertEquals('Blobby', $json['name']);
    }
}

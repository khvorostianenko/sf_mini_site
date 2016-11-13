<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NewsControllerTest extends WebTestCase
{
    public function testItem()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/news');
    }

}

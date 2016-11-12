<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testContacts()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contacts');
    }

    public function testAbout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/about');
    }

}

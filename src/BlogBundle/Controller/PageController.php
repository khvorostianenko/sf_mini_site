<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('BlogBundle:News');
        $news = $repository->findAll();

        return $this->render('BlogBundle:Page:index.html.twig', array(
            'news' => $news
        ));
    }

    public function contactsAction()
    {
        return $this->render('BlogBundle:Page:contacts.html.twig', array(
            // ...
        ));
    }

    public function aboutAction()
    {
        return $this->render('BlogBundle:Page:about.html.twig', array(
            // ...
        ));
    }

}

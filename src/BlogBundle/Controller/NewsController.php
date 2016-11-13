<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NewsController extends Controller
{
    public function itemAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('BlogBundle:News');
        $news = $repository->find($id);
        
        return $this->render('BlogBundle:News:item.html.twig', array(
            'news' => $news
        ));
    }

}

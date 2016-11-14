<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use BlogBundle\Form\CommentType;

class NewsController extends Controller
{
    public function itemAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('BlogBundle:News');
        $news = $repository->find($id);

        $comment = new Comment();
        $comment->setNewsId($id);

//        $form = $this->createForm('BlogBundle\Form\CommentType', $comment);

        $form = $this->createForm(CommentType::class, $comment, array(
            'action' => $this->generateUrl('save_comment'),
            'method' => 'GET',
        ));

        return $this->render('BlogBundle:News:item.html.twig', array(
            'news' => $news,
            'form' => $form->createView()
        ));
    }

    public function saveCommentAction(){
        return new Response($_POST);
    }


}

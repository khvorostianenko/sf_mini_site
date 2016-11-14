<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use BlogBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

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
            'method' => 'POST',
        ));

        return $this->render('BlogBundle:News:item.html.twig', array(
            'news' => $news,
            'form' => $form->createView()
        ));
    }

    public function saveCommentAction(Request $request){
//        var_dump($_POST);
//        die;
        $comment = new Comment();
        $form = $this->createForm('BlogBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        $repository = $this
            ->getDoctrine()
            ->getManager()
            ->getRepository('BlogBundle:News');
        $news = $repository->find($_POST['blogbundle_comment']['newsId']);
        $comment->setNews($news);

        $manager = $this->getDoctrine()->getEntityManager();
        $manager->persist($comment);
        $manager->flush();

        return $this->redirectToRoute('item', ['id' => $_POST['blogbundle_comment']['newsId']]);
    }
}

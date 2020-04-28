<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Article;

/**
 * Class ArticlesController
 * @package App\Controller
 * @Route("/actualites", name="actualites_")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="articles")
     */
    public function index()
    {
        // Méthode findBy qui permet de récupérer les données avec des critères de filtre et de tri
        $articles = $this->getDoctrine()->getRepository(Article::class)->findBy([],['createdAt' => 'desc']);

        return $this->render('article/index.html.twig', [
            'articles' => $articles,
        ]);
    }

     /**
     * @Route("/{id}", name="article_show", methods={"GET"})
     */
    public function show(Article $article): Response
    {
        return $this->render('article/show.html.twig', [
            'article' => $article,
        ]);
    }
}

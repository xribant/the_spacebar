<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
	/**
	 * @Route("/")
	 */

	public function homepage()
	{
		return new Response('OMG! My first page already! Wooo!');
	}

	/**
	 * @Route("/news/{slug}")
	 */

	public function show($slug)
	{
		$comments = [
			"C'est un superbe site réalisé avec Symfony",
			'Ce site est bof, réalisé avec Joumla',
			'Ce site est pourri et static, réalisé avec Wordpress',
		];

		return $this->render('article/show.html.twig', [
			'title' => ucwords(str_replace('-', ' ', $slug)),
			'comments' => $comments,
		]);
		
	}
}
<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $product = $productRepository->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'All products',
            'products' => $product,
        ]);
    }
}

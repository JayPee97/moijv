<?php

namespace App\Controller;
use App\Repository\PageRepository;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/product/{id}", name="product")
     */
    public function details(Product $product)
    {
        // SELECT * FROM page WHERE id = 1
/*        $products = $productRepository->find(1);*/
        return $this->render('page/details.html.twig', [
            'product' => $product,
        ]);
    }
}

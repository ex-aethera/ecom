<?php

namespace App\Controller\Last;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller\Last
 * Last called controller when no other route can be found -> Lookup url in url-rewrite table and if not exist throw 404 error and logs the page request
 */
class DefaultController extends AbstractController {
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * DefaultController constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @Route("/", name="default")
     * @return Response
     */
    public function index() {
        return $this->render('default/index.html.twig',
        [
            'controller_name' => 'DefaultController'
        ]);
    }
}
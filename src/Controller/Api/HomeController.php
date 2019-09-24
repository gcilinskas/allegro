<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 * @Route("/home")
 */
class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Method("GET")
     */
    public function index()
    {
        $response = new JsonResponse(
            [
                'data' => [
                    [
                        'name' => 'bob',
                        'age' => 5
                    ],
                    [
                        'name' => 'tom',
                        'age' => 10
                    ],
                    [
                        'name' => 'ashley',
                        'age' => 27
                    ]

                ]
            ]
        );

        return $response;
    }
}
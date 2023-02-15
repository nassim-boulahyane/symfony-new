<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\Greeter;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{
    function hello(Greeter $greeter)
    {
        $message = $greeter->greet();
        return new Response($message);
    }
};

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends AbstractController
{


    function hello($param)
    {
        $title = 'uti';
        $users = ["tondaye"];
        return $this->render('hello.html.twig', ['title' => $title, 'array' => $users]);
    }
};

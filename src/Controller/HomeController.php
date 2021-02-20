<?php
namespace App\Controller;


use NeutronStars\Neutrino\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('app.home');
    }
}

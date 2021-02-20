<?php
namespace App\Controller;


use NeutronStars\Form\Bootstrap\TextElement;
use NeutronStars\Form\Bootstrap\XSRFElement;
use NeutronStars\Neutrino\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('app.home');
    }

    public function contact(): void
    {
        $form = $this->createForm($_POST, '', 'POST', new XSRFElement());

        $form->add(new TextElement('Nom *', 'name', 'name', [
            'min' => '3',
            'max' => '32'
        ], 'Entrez votre nom'));

        $this->render('app.contact', [
            'form' => $form
        ]);
    }
}

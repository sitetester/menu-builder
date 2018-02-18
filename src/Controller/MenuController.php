<?php

namespace App\Controller;

use App\Service\MenuManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class MenuController extends Controller
{
    /**
     * @Route("/menus", name="menus")
     */
    public function index(MenuManager $menuManager)
    {
        $session = new Session();
        $userLoggedIn = $session->get('userLoggedIn', false);

        return $this->render(
            'menu/index.html.twig',
            [
                'menu' => $menuManager->displayMenu($userLoggedIn),
                'userLoggedIn' => $userLoggedIn,
            ]
        );
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function index(Request $request)
    {
        $session = new Session();
        $session->set('userLoggedIn', false);

        $error = '';
        $username = '';

        if ($request->request->count()) {
            $username = $request->request->get('username');
            $password = $request->request->get('password');

            if ($username === 'admin' && $password === 'demo') {
                $session->set('userLoggedIn', true);
                return $this->redirectToRoute('menus');
            } else {
                $error = 'Invalid username/password';
            }
        }

        return $this->render(
            'login/index.html.twig',
            [
                'username' => $username,
                'error' => $error,
            ]
        );
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        $session = new Session();
        $session->set('userLoggedIn', false);

        return $this->redirectToRoute('login');
    }
}
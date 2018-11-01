<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class DefaultController extends AbstractController
{
    /**
     * @Route("/admin", name="home")
     */
    public function admin(TranslatorInterface $translator)
    {
        $translated = $translator->trans('Symfony is great');
        return new Response("<html><body>$translated</body></html>");
    }
}

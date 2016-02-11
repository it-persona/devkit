<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class IndexController
 * @package AppBundle\Controller
 */
class IndexController extends Controller {
    /**
     * @Template(template="Index/index.html.twig")
     * @Route("/", name="homepage")
     *
     * @return array
     */
    public function indexAction()
    {
        return [
            'var_msg' => 'Parss assimilant in mare! Capio persuaderes, tanquam regius amor. Cur amor persuadere?'
        ];
    }
}

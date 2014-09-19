<?php

namespace afpa\ColorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
	$bleu=rand(0,255);
	$vert=rand(0,255);
	$rouge=rand(0,255);
	
        return $this->render('afpaColorBundle:Default:index.html.twig', array('name' => $name,'bleu' => $bleu, 'vert' => $vert, 'rouge' => $rouge));
		
    }
}

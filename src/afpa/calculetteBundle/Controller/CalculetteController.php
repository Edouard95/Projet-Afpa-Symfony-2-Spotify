<?php

namespace afpa\calculetteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class CalculetteController extends Controller
{
    public function calculAction($taf,$nbre1,$nbre2)
	
    {
				$result=new Response;
				$result->setContent("Page d'erreur 404");

				if ($taf=='addition')
				{
				$result=$nbre1+$nbre2;
				}
				
				if ($taf=='soustration')
				{
				$result=$nbre1-$nbre2;
				}
				
				if ($taf=='multiplication')
				{
				$result=$nbre1*$nbre2;
				}
				if ($taf=='division')
				{
	                 if ($nbre2!=0)
	                 {
	                 	$result=$nbre1/$nbre2;	
					 }

                    else return $result;
                    	
        return $this->render('afpacalculetteBundle:Default:index.html.twig', array('result' => $result));
    }
}
}
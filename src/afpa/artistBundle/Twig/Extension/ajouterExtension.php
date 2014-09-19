<?php

namespace afpa\artistBundle\Twig\Extension;
 
class ajouterExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array( 
			'ajouter' => new \Twig_Filter_Method($this, 'nouvelle_valeur')
        );
    }
 
    public function nouvelle_valeur($value)
    {
        if ($value<=90)
		{
        $value += 10;
		}
	    else $value=100;
        return $value;
    }
 
    public function getName()
    {
        return 'ajouter_extension';
    }
 
}
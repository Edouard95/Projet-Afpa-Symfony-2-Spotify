<?php

namespace	afpa\artistBundle\Tests\Entity;	
use	afpa\artistBundle\Entity\Post;
class	PostTest	extends	\PHPUnit_Framework_TestCase	
	{	
		 public	function	testCategory()	
		 {	
			 $Post	=	new	Post();	
			 $Post -> setPopularite(85);
			 $result	=	$Post->getCategory();	
			 $this->assertEquals("Super Star",	$result);	
		 }
	 
	 
	} 
?>
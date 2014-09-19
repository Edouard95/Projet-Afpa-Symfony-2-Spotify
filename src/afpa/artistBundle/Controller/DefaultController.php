<?php

namespace afpa\artistBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use afpa\artistBundle\Entity\Post;

class DefaultController extends Controller
{
			    public function indexAction($id)
			    {
			    	$url='https://api.spotify.com/v1/artists/'.$id;
			    	$fichier='C:\wamp\www\symfony2\src\afpa\artistBundle\Resources\public\api\\'.$id.'.json';
					$sp=file_get_contents($fichier,false);
					$artist_spotify=json_decode($sp, true);
					if(isset($artist_spotify))
			        return $this->render('afpaartistBundle:Default:index.html.twig', array('artist_spotify' => $artist_spotify));
				}

				
				public function sauvegardeAction($id)
				{
					$url='https://api.spotify.com/v1/artists/'.$id;
			    	$fichier='C:\wamp\www\symfony2\src\afpa\artistBundle\Resources\public\api\\'.$id.'.json';
					$sp=file_get_contents($fichier,false);
					$artist_spotify=json_decode($sp, true);
					if(isset($artist_spotify))

						if(isset($artist_spotify["genres"][0])) $genre = $artist_spotify["genres"][0];
						else  $genre = '-';

						if(isset($artist_spotify["images"][0][0])) $images = $artist_spotify["images"][0][0];
						else  $images = '****';

						print_r($images);

					$Post = new Post();
					$Post -> setNom($artist_spotify["name"]);
					$Post -> setGenre($genre);
					$Post -> setPopularite($artist_spotify["popularity"]);
					$Post -> setPhoto($images);

					$doctrine = $this->getDoctrine();
					$em = $doctrine->getManager();
					$em->persist($Post);
					$em->flush();
                    
					$url	=	$this->generateUrl('afpaartist_homepage',	array('id' => $id));	
					return	$this->redirect($url);
										
				}
			    
}

   	


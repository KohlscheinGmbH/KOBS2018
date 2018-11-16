<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Form\BenutzerType;
use App\Entity\Menu;
use Doctrine\ORM\Mapping as ORM;

class BenutzerverwaltungController extends AbstractController
{
    /**
     * @Route("/benutzerverwaltung", name="benutzerverwaltung")
     */
    public function index(Request $request)
    {	
		$Benutzer = $this->getDoctrine()->getRepository('App:Menu')->findAll();
		
		$Menu 	= new Menu();	
		$em 	= $this -> getDoctrine() -> getManager();
        $Menu 	= $em 	-> getRepository('App:Menu')->findall();
        $form 	= $this -> createForm(BenutzerType::class, $Menu);
		
		$form -> handleRequest($request);

		if ($form -> getClickedButton() && 'loeschen' === $form -> getClickedButton() -> getName()) 		
		{				
			$em -> remove($Menu);
            $em -> flush();
			
			return $this->redirectToRoute('Menu');			
		}
		if ($form -> getClickedButton() && 'speichern' === $form -> getClickedButton() -> getName())  
		{			
			$Menu -> setupdatevon(''); //hier durch Variable: AktuellerUser ersetzen
			$em -> persist($Menu);
            $em -> flush();				
		}
		
		return $this -> render(
		'benutzerverwaltung/index.html.twig' ,	
		array('form' => $form->createView())
		);	
		//'Benutzer' => $Benutzer,			
    }
	
	public function bearbeiten($id, Request $request)
    {
		$Menu 	= new Menu();	
		$em 	= $this -> getDoctrine() -> getManager();
        $Menu 	= $em 	-> getRepository('App:Menu')->find($id);
        $form 	= $this -> createForm(ArtikelType::class, $Menu);
		
		$form -> handleRequest($request);

		if ($form -> getClickedButton() && 'loeschen' === $form -> getClickedButton() -> getName()) 		
		{				
			$em -> remove($Menu);
            $em -> flush();
			
			return $this->redirectToRoute('Menu');			
		}
		if ($form -> getClickedButton() && 'speichern' === $form -> getClickedButton() -> getName())  
		{			
			$Menu -> setupdatevon(''); //hier durch Variable: AktuellerUser ersetzen
			$em -> persist($Menu);
            $em -> flush();				
		}
 
		return $this -> render(
		'benutzerverwaltung/index.html.twig' ,	
		array('form' => $form->createView())
		);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

    /**
     * @Route("/update/{id}/{anrede}/{vorname}/{nachname}/{abteilung}", name="update")
     */
    public function updateAction($id, $anrede, $vorname, $nachname, $abteilung)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('App:Menu')->find($id);

        if (!$post) {
            throw $this->createNotFoundException('thats not a record');
        }

        /** @var $post RedditPost */
		$post->setAnrede($anrede);
        $post->setVorname($vorname);
		$post->setNachname($nachname);
		$post->setAbteilung($abteilung);
		
        $em->flush();

        return $this->redirectToRoute('benutzerverwaltung');
    }
	
	
	/**
     * @Route("/delete/{id}", name="delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $post = $em->getRepository('App:Menu')->find($id);

        if (!$post) {
            return $this->redirectToRoute('benutzerverwaltung');
        }

        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('benutzerverwaltung');
    }

	
}

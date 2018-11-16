<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ArtikelType;
use App\Entity\Artikel;

class ArtikelController extends AbstractController
{
    /**
     * @Route("/artikel", name="artikel")
     */
    public function index()
    {
		$Artikel = $this->getDoctrine()->getRepository('App:Artikel')->findAll();
		
        return $this->render('artikel/index.html.twig', [
			'Artikel' => $Artikel,
        ]);
    }
	
	/**
     * @Route("/artikel/bearbeiten/{id}", name="artikel_bearbeiten")
     */
	public function bearbeiten($id, Request $request)
    {
		$Artikel 	= new Artikel();	
		$em 		= $this -> getDoctrine() -> getManager();
        $Artikel 	= $em 	-> getRepository('App:Artikel')->find($id);
        $form 		= $this -> createForm(ArtikelType::class, $Artikel);
		
		$form -> handleRequest($request);

		if ($form -> getClickedButton() && 'loeschen' === $form -> getClickedButton() -> getName()) 		
		{				
			$em -> remove($Artikel);
            $em -> flush();
			
			return $this->redirectToRoute('artikel');			
		}
		if ($form -> getClickedButton() && 'speichern' === $form -> getClickedButton() -> getName())  
		{			
			$Artikel -> setupdatevon('NOT WORKING'); //hier durch Variable: AktuellerUser ersetzen
			$em -> persist($Artikel);
            $em -> flush();				
		}
 
		return $this -> render(
		'artikel/bearbeiten.html.twig' ,	
		array('form' => $form->createView())
		);
	}	

	/**
     * @Route("/artikel/neu", name="artikel_neu")
     */
	public function neu(Request $request)
    {
		$Artikel = new Artikel();			
		$form = $this -> createForm(ArtikelType::class, $Artikel);
		$form -> handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid())
		{				
			 $Artikel = $form->getData();

			 $entityManager = $this->getDoctrine()->getManager();
			 
			 $Artikel->setwgid(1);
			 $Artikel->setuwgid(1);
			 $Artikel->setmeid(1);
			 $Artikel->setmwstid(1);
			 $Artikel->setangelegtvon(1);
			 $Artikel->setupdatevon(1);
			 $Artikel->setmindestbestellmenge(1);
			 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager -> persist($Artikel);
            $entityManager -> flush();
		}
		return $this -> render(
		'artikel/bearbeiten.html.twig' ,	
		array('form' => $form->createView())
		);
	}
}
<?php
// src/Form/ArtikelType.php
namespace App\Form;

use App\Entity\Artikel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class ArtikelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('ean', NumberType::class, array(
				'label' => 'EAN',
			))
			->add('ekdurch', NumberType::class, array(
				'label' => 'EK - Durchschnitt',
			))
			->add('bestand', NumberType::class)	
			
			->add('updateam', DateType::class, array(
				'widget' => 'single_text',
				'label' => 'Update am',
				'required'   => false,
				'disabled' => 'true',
			))
			->add('angelegtam', DateType::class, array(
				'widget' => 'single_text',
				'label' => 'Angelegt am',
				'disabled' => 'true',
				'required'   => false,
			))
			->add('updatevon', TextType::class, array(
				'disabled' => 'true',
				'label' => 'Geändert von',
			))
			->add('listenpreis', MoneyType::class)
			
			->add('angelegtvon', TextType::class, array(
				'disabled' => 'true',
				'label' => 'Angelegt von',
			))
			->add('bezeichnung1', TextType::class, array(
				'label' => 'Bezeichnung',
			))
			->add('bezeichnung2', TextType::class, array(
				'label' => 'Zusatz'
			))
			->add('artikelnummer', NumberType::class)
			
			->add('mindestbestand', NumberType::class)
			
			->add('vpebezeichnung', TextType::class, array(
				'label' => 'VPE - bezeichnung'
			))
			->add('mindestbestellmenge', NumberType::class)
			
			->add('speichern', SubmitType::class, array(
				'label' => 'Ja, Speichern'
			))
			->add('loeschen', SubmitType::class, array(
				'label' => 'Ja, Löschen'
			))
			->add('warengruppe', TextType::class, array(
				'label' => 'Warengruppe'
			))
			->add('unterwarengruppe', TextType::class, array(
				'label' => 'Unterwarengruppe'
			))
			->add('mengeneinheit', ChoiceType::class, array(
				'label' => 'Mengeneinheit',
				'choices' => array(
					'STK' => 'STK',
					'KG' => 'KG',
					'L' => 'L',
				),
			))
			->add('mwst', TextType::class, array(
				'label' => 'Mehrwertsteuer'
			))
			->getForm();				
    }
	

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Artikel::class,
        ));
    }
}
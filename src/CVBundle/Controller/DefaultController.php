<?php

namespace CVBundle\Controller;

use CVBundle\Entity\Education;
use CVBundle\Form\EducationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $education = new Education();
        $form=$this->createForm(EducationType::class,$education);
        $form->handleRequest($request);
        if($form->isSubmitted()&&$form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($education);
            $em->flush();
            $educations = $em->getRepository('CVBundle:Education')->findAll();
            return $this->render('@CV/Education/index.html.twig',array('educations'=>$educations));
        }
        return $this->render('@CV/Education/ajouterEducation.html.twig',array('form'=>$form->createView()));
    }
}

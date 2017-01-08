<?php

namespace GfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GfctBundle\Entity\Empresa;
use GfctBundle\Form\EmpresaType;
use Symfony\Component\HttpFoundation\Request;

class EmpresaController extends Controller
{
    public function empresaAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('GfctBundle:Empresa');
        $empresas = $repository->findAll();
        return $this->render('GfctBundle:Empresa:all.html.twig',array("empresas"=>$empresas ));
    }

    public function empresaNewAction(Request $request)
    {
      //generamos la empresa
      $empresa = new Empresa();
      $form= $this->createForm(EmpresaType::class,$empresa);

      //recogemos la peticion
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
         $empresa = $form->getData();
         //Salvamos la empresa
         $em = $this->getDoctrine()->getManager();
         $em->persist($empresa);
         $em->flush();

         return $this->redirectToRoute('gfct_empresas');
      }
      return $this->render('GfctBundle:Empresa:new.html.twig',array("form"=>$form->createView()));
    }
}

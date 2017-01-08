<?php

namespace GfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GfctBundle\Entity\Empresa;
use GfctBundle\Entity\Alumno;
use Symfony\Component\HttpFoundation\Request;

class AlumnoController extends Controller
{
    public function alumnoAllAction()
    {
        $repository = $this->getDoctrine()->getRepository('GfctBundle:Alumno');
        $alumnos = $repository->findAll();
        return $this->render('GfctBundle:Alumno:all.html.twig',array("alumnos"=>$alumnos ));
    }
}

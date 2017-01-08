<?php

namespace GfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GfctBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    private function serializeEmpresa(Empresa $empresa)
    {
      return array(
          'nombre' => $empresa->getNombre(),
          'ciudad' => $empresa->getDireccion(),
          'numEmpleados' => $empresa->getCp(),
      );
    }
    public function empresasAction()
    {
        $repository = $this->getDoctrine()->getRepository('GfctBundle:Empresa');
        $empresas = $repository->findAll();


        //var_dump($empresas);
        $data = array('empresas' => array());
        foreach ($empresas as $empresa) {
            $data['empresas'][] = $this->serializeEmpresa($empresa);
        }
        $response = new JsonResponse($data, 400);
        return $response;
    }
    public function empresasNuevaAction(Request $request)
    {
      $empresa = new Empresa();
      $empresa->setNombre($request->request->get('nombre'));
      return new Response(   );
    }
}

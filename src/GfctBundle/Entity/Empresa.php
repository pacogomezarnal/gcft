<?php

namespace GfctBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="GfctBundle\Repository\EmpresaRepository")
 */
class Empresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=256)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=512)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=5)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono1", type="string", length=12)
     */
    private $telefono1;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono2", type="string", length=12)
     */
    private $telefono2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="datetime", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @ORM\OneToMany(targetEntity="Alumno", mappedBy="empresa")
     */
    private $alumnos;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Empresa
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set telefono1
     *
     * @param string $telefono1
     *
     * @return Empresa
     */
    public function setTelefono1($telefono1)
    {
        $this->telefono1 = $telefono1;

        return $this;
    }

    /**
     * Get telefono1
     *
     * @return string
     */
    public function getTelefono1()
    {
        return $this->telefono1;
    }

    /**
     * Set telefono2
     *
     * @param string $telefono2
     *
     * @return Empresa
     */
    public function setTelefono2($telefono2)
    {
        $this->telefono2 = $telefono2;

        return $this;
    }

    /**
     * Get telefono2
     *
     * @return string
     */
    public function getTelefono2()
    {
        return $this->telefono2;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Empresa
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->alumnos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add alumno
     *
     * @param \GfctBundle\Entity\Alumno $alumno
     *
     * @return Empresa
     */
    public function addAlumno(\GfctBundle\Entity\Alumno $alumno)
    {
        $this->alumnos[] = $alumno;

        return $this;
    }

    /**
     * Remove alumno
     *
     * @param \GfctBundle\Entity\Alumno $alumno
     */
    public function removeAlumno(\GfctBundle\Entity\Alumno $alumno)
    {
        $this->alumnos->removeElement($alumno);
    }

    /**
     * Get alumnos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAlumnos()
    {
        return $this->alumnos;
    }
}

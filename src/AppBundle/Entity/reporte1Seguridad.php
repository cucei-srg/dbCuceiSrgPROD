<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\usuario;
use AppBundle\Entity\objetosReporte1Seguridad;
/**
 * @ORM\Entity
 * @ORM\Table(name="reporte1Seguridad")
 */
class reporte1Seguridad
{
/**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
  /**
    * @ORM\ManyToOne(targetEntity="usuario")
    * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
    */
  private $idUsuario;
/**
  * @ORM\Column(type="string", length=60, nullable=false)
  */
  private $tipoServicio;
/**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $afectado;
/**
  * @ORM\Column(type="integer", nullable=false)
  */
  private $edad;
/**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $carrera;
/**
  * @ORM\Column(type="integer", nullable=false)
  */
  private $codigo;
/**
  * @ORM\Column(type="integer", nullable=false)
  */
  private $telefono;
/**
  * @ORM\Column(type="date", nullable=false)
  */
  private $fecha;
/**
  * @ORM\Column(type="string",length=10, nullable=false)
  */
  private $hora;
/**
  * @ORM\Column(type="string", length=50, nullable=false)
  */
  private $lugar;
/**
  * @ORM\Column(type="string",nullable=false)
  */
  private $hechos;
/**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $correo;


   /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

     /**
     * Get the value of Idusuario
     *
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of IdUsuario
     *
     * @param mixed idUsuario
     *
     * @return self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

     /**
     * Get the value of TipoServicio
     *
     * @return mixed
     */
    public function getTipoServicio()
    {
        return $this->tipoServicio;
    }

    /**
     * Set the value of TipoServicio
     *
     * @param mixed tipoServicio
     *
     * @return self
     */
    public function setTipoServicio($tipoServicio)
    {
        $this->tipoServicio = $tipoServicio;

        return $this;
    }

    /**
     * Get the value of Afectado
     *
     * @return mixed
     */
    public function getAfectado()
    {
        return $this->afectado;
    }

    /**
     * Set the value of Afectado
     *
     * @param mixed afectado
     *
     * @return self
     */
    public function setAfectado($afectado)
    {
        $this->afectado = $afectado;

        return $this;
    }

    /**
     * Get the value of Edad
     *
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of Edad
     *
     * @param mixed edad
     *
     * @return self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of Carrera
     *
     * @return mixed
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set the value of Carrera
     *
     * @param mixed carrera
     *
     * @return self
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;

        return $this;
    }

    /**
     * Get the value of Codigo
     *
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of Codigo
     *
     * @param mixed codigo
     *
     * @return self
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get the value of Telefono
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of Telefono
     *
     * @param mixed telefono
     *
     * @return self
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of Fecha
     *
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of Fecha
     *
     * @param mixed fecha
     *
     * @return self
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

     /**
     * Get the value of Hora
     *
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Set the value of Hora
     *
     * @param mixed hora
     *
     * @return self
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

     /**
     * Get the value of Lugar
     *
     * @return mixed
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Set the value of Lugar
     *
     * @param mixed lugar
     *
     * @return self
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;

        return $this;
    }

     /**
     * Get the value of Hechos
     *
     * @return mixed
     */
    public function getHechos()
    {
        return $this->hechos;
    }

    /**
     * Set the value of Hechos
     *
     * @param mixed hechos
     *
     * @return self
     */
    public function setHechos($hechos)
    {
        $this->hechos = $hechos;

        return $this;
    }

     /**
     * Get the value of IdObjeto
     *
     * @return mixed
     */
    public function getIdObjeto()
    {
        return $this->idObjeto;
    }

    /**
     * Set the value of IdObjeto
     *
     * @param mixed idObjeto
     *
     * @return self
     */
    public function setIdObjeto($idObjeto)
    {
        $this->idObjeto = $idObjeto;

        return $this;
    }
    /**
     * Get the value of Correo
     *
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set the value of Correo
     *
     * @param mixed correo
     *
     * @return self
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }
}
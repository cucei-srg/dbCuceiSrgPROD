<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class usuario
{
/**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
  /**
  * @ORM\Column(type="string", length=30, nullable=false)
  */
  private $nombre;
  /**
  * @ORM\Column(type="string", length=30, nullable=false)
  */
  private $aPaterno; 
  /**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $aMaterno;
  /**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $correo;
  /**
  * @ORM\Column(type="integer", length=30, nullable=false)
  */
  private $status;
  /**
  * @ORM\Column(type="string", length=200, nullable=true)
  */
  private $token;
  /**
  * @ORM\Column(type="string", length=15, nullable=true)
  */
  private $telefono;
/**
  * @ORM\Column(type="string", length=60, nullable=true)
  */
  private $motivoBaja;

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
     * Get the value of Nombre
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @param mixed nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of Apaterno
     *
     * @return mixed
     */
    public function getApaterno()
    {
        return $this->aPaterno;
    }

    /**
     * Set the value of Apaterno
     *
     * @param mixed aPaterno
     *
     * @return self
     */
    public function setApaterno($aPaterno)
    {
        $this->aPaterno = $aPaterno;

        return $this;
    }

    /**
     * Get the value of Amaterno
     *
     * @return mixed
     */
    public function getAmaterno()
    {
        return $this->aMaterno;
    }

    /**
     * Set the value of Amaterno
     *
     * @param mixed aMaterno
     *
     * @return self
     */
    public function setAmaterno($aMaterno)
    {
        $this->aMaterno = $aMaterno;

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
    /**
     * Get the value of status
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param mixed status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of token
     *
     * @return mixed
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @param mixed token
     *
     * @return self
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }
    /**
     * Get the value of telefono
     *
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
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
     * Get the value of motivoBaja
     *
     * @return mixed
     */
    public function getmotivoBaja()
    {
        return $this->motivoBaja;
    }

    /**
     * Set the value of motivoBaja
     *
     * @param mixed motivoBaja
     *
     * @return self
     */
    public function setmotivoBaja($motivoBaja)
    {
        $this->motivoBaja = $motivoBaja;

        return $this;
    }
}

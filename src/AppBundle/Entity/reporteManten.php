<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\usuario;
/**
 * @ORM\Entity
 * @ORM\Table(name="reporteManten")
 */
class reporteManten
{
/**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $folio;
  /**
    * @ORM\ManyToOne(targetEntity="usuario")
    * @ORM\JoinColumn(name="idUsuario", referencedColumnName="id")
    */
  private $idUsuario;
  /**
  * @ORM\Column(type="datetime", nullable=false)
  * @ORM\Version
  * @var string
  */
  private $fechaElaboracion;
  /**
  * @ORM\Column(type="string", length=60, nullable=false)
  */
  private $recibe;
  /**
  * @ORM\Column(type="date", nullable=true)
  */
  private $fechaRecepcion;
  /**
  * @ORM\Column(type="date", nullable=true)
  */
  private $fechaAsignacion;
  /**
  * @ORM\Column(type="date", nullable=true)
  */
  private $fechaReparacion;

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
  * @ORM\Column(type="integer", nullable=false)
  */
  private $telefono;
 /**
  * @ORM\Column(type="string", length=50, nullable=false)
  */
  private $areaSolicitante;
   /**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $ubicacionServicio;
  /**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $anotacionExtra;
  /**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $descripcionServicio;
  /**
  * @ORM\Column(type="string", nullable=false)
  */
  private $descripcionProblema;
  /**
  * @ORM\Column(type="blob", nullable=true)
  */
  private $fotografia;
  /**
  * @ORM\Column(type="string", length=60, nullable=false)
  */
  private $correo;

   /**
     * Get the value of Folio
     *
     * @return mixed
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set the value of Folio
     *
     * @param mixed folio
     *
     * @return self
     */
    public function setFolio($folio)
    {
        $this->folio = $folio;

        return $this;
    }

     /**
     * Get the value of IdUsuario
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
     * Get the value of FechaElaboracion
     *
     * @return mixed
     */
    public function getFechaElaboracion()
    {
        return $this->fechaElaboracion;
    }

    /**
     * Set the value of fechaElaboracion
     *
     * @param mixed fechaElaboracion
     *
     * @return self
     */
    public function setId($fechaElaboracion)
    {
        $this->fechaElaboracion = $fechaElaboracion;

        return $this;
    }

     /**
     * Get the value of Recibe
     *
     * @return mixed
     */
    public function getRecibe()
    {
        return $this->recibe;
    }

    /**
     * Set the value of Recibe
     *
     * @param mixed recibe
     *
     * @return self
     */
    public function setRecibe($recibe)
    {
        $this->recibe = $recibe;

        return $this;
    }

     /**
     * Get the value of FechaRecepcion
     *
     * @return mixed
     */
    public function getFechaRecepcion()
    {
        return $this->fechaRecepcion;
    }

    /**
     * Set the value of FechaRecepcion
     *
     * @param mixed fechaRecepcion
     *
     * @return self
     */
    public function setFechaRecepcion($fechaRecepcion)
    {
        $this->fechaRecepcion = $fechaRecepcion;

        return $this;
    }

     /**
     * Get the value of fechaAsignacion
     *
     * @return mixed
     */
    public function getFechaAsignacion()
    {
        return $this->fechaAsignacion;
    }

    /**
     * Set the value of fechaAsignacion
     *
     * @param mixed fechaAsignacion
     *
     * @return self
     */
    public function setFechaAsignacion($fechaAsignacion)
    {
        $this->fechaAsignacion = $fechaAsignacion;

        return $this;
    }

    /**
     * Get the value of fechaReparacion
     *
     * @return mixed
     */
    public function getFechaReparacion()
    {
        return $this->fechaReparacion;
    }

    /**
     * Set the value of fechaReparacion
     *
     * @param mixed fechaReparacion
     *
     * @return self
     */
    public function setFechaReparacion($fechaReparacion)
    {
        $this->fechaReparacion = $fechaReparacion;

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
     * Get the value of Areasolicitante
     *
     * @return mixed
     */
    public function getAreasolicitante()
    {
        return $this->areaSolicitante;
    }

    /**
     * Set the value of Areasolicitante
     *
     * @param mixed areaSolicitante
     *
     * @return self
     */
    public function setareAsolicitante($areaSolicitante)
    {
        $this->areaSolicitante = $areaSolicitante;

        return $this;
    }

    /**
     * Get the value of UbicacionServicio
     *
     * @return mixed
     */
    public function getUbicacionServicio()
    {
        return $this->ubicacionServicio;
    }

    /**
     * Set the value of UbicacionServicio
     *
     * @param mixed ubicacionServicio
     *
     * @return self
     */
    public function setUbicacionServicio($ubicacionServicio)
    {
        $this->ubicacionServicio = $ubicacionServicio;

        return $this;
    }

     /**
     * Get the value of anotacionExtra
     *
     * @return mixed
     */
    public function getAnotacionExtra()
    {
        return $this->anotacionExtra;
    }

    /**
     * Set the value of anotacionExtra
     *
     * @param mixed anotacionExtra
     *
     * @return self
     */
    public function setAnotacionExtra($anotacionExtra)
    {
        $this->anotacionExtra = $anotacionExtra;

        return $this;
    }

     /**
     * Get the value of DescripcionServicio
     *
     * @return mixed
     */
    public function getDescripcionServicio()
    {
        return $this->descripcionServicio;
    }

    /**
     * Set the value of DescripcionServicio
     *
     * @param mixed descripcionServicio
     *
     * @return self
     */
    public function setDescripcionServicio($descripcionServicio)
    {
        $this->descripcionServicio = $descripcionServicio;

        return $this;
    }

     /**
     * Get the value of DescripcionProblema
     *
     * @return mixed
     */
    public function getDescripcionProblema()
    {
        return $this->descripcionProblema;
    }

    /**
     * Set the value of DescripcionProblema
     *
     * @param mixed descripcionProblema
     *
     * @return self
     */
    public function setdDscripcionProblema($descripcionProblema)
    {
        $this->descripcionProblema = $descripcionProblema;

        return $this;
    }

     /**
     * Get the value of Fotografia
     *
     * @return mixed
     */
    public function getFotografia()
    {
        return $this->fotografia;
    }

    /**
     * Set the value of Fotografia
     *
     * @param mixed fotografia
     *
     * @return self
     */
    public function setFotografia($fotografia)
    {
        $this->fotografia = $fotografia;

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
<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\usuario;
use AppBundle\Entity\instituciones;
/**
 * @ORM\Entity
 * @ORM\Table(name="reporte2Seguridad")
 */
class reporte2Seguridad
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
    * @ORM\ManyToOne(targetEntity="instituciones")
    * @ORM\JoinColumn(name="idInstitucion", referencedColumnName="id")
    */
  private $idInstitucion;
/**
  * @ORM\Column(type="datetime", nullable=false)
  * @ORM\Version
  * @var string
  */
  private $fechaElaboracion;
/**
  * @ORM\Column(type="string", length=100, nullable=false)
  */
  private $nombre;
/**
  * @ORM\Column(type="integer", nullable=false)
  */
  private $edad;
/**
  * @ORM\Column(type="integer", nullable=false)
  */
  private $codigo;
/**
  * @ORM\Column(type="string", length=60, nullable=false)
  */
  private $carrera;
/**
  * @ORM\Column(type="string", length=60, nullable=false)
  */
  private $correo;
/**
  * @ORM\Column(type="integer", nullable=false)
  */
  private $telefono;
/**
  * @ORM\Column(type="date", nullable=false)
  */
  private $fechaIncidente;
/**
  * @ORM\Column(type="string", nullable=false)
  */
  private $horaIncidente;
/**
  * @ORM\Column(type="string",length=100, nullable=false)
  */
  private $lugar;
/**
  * @ORM\Column(type="string",length=300, nullable=false)
  */
  private $descripcionSuceso;
/**
  * @ORM\Column(type="string",length=100, nullable=false)
  */
  private $tipoRobo;
/**
  * @ORM\Column(type="float", nullable=true)
  */
  private $estatura;
/**
  * @ORM\Column(type="string",length=100, nullable=true)
  */
  private $apariencia;
/**
  * @ORM\Column(type="string",length=30, nullable=true)
  */
  private $tez;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $cabello;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $ojos;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $cara;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $boca;
/**
  * @ORM\Column(type="string",length=50, nullable=true)
  */
  private $tipoRopa;
/**
  * @ORM\Column(type="string", length=50, nullable=true)
  */
  private $objetoRostro;
/**
  * @ORM\Column(type="integer", nullable=true)
  */
  private $edadAprox;
/**
  * @ORM\Column(type="string",length=50, nullable=true)
  */
  private $cicatriz;
/**
  * @ORM\Column(type="string", length=50, nullable=true)
  */
  private $tatuaje;
/**
  * @ORM\Column(type="string",length=50, nullable=true)
  */
  private $piercing;
/**
  * @ORM\Column(type="string",length=100, nullable=true)
  */
  private $otro;
/**
  * @ORM\Column(type="string", length=250, nullable=true)
  */
  private $metodoHuida;
/**
  * @ORM\Column(type="string", length=250, nullable=true)
  */
  private $observaciones;

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
     * Get the value of Institucion
     *
     * @return mixed
     */
    public function getInstitucion()
    {
        return $this->institucion;
    }

    /**
     * Set the value of Institucion
     *
     * @param mixed institucion
     *
     * @return self
     */
    public function setInstitucion($institucion)
    {
        $this->institucion = $institucion;

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
     * Set the value of FechaElaboracion
     *
     * @param mixed fechaElaboracion
     *
     * @return self
     */
    public function setFechaElaboracion($fechaElaboracion)
    {
        $this->fechaElaboracion = $fechaElaboracion;

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
     * Get the value of carrera
     *
     * @return mixed
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set the value of carrera
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
     * Get the value of FechaIncidente
     *
     * @return mixed
     */
    public function geFechaIncidente()
    {
        return $this->fechaIncidente;
    }

    /**
     * Set the value of FechaIncidente
     *
     * @param mixed fechaIncidente
     *
     * @return self
     */
    public function setFechaIncidente($fechaIncidente)
    {
        $this->fechaIncidente = $fechaIncidente;

        return $this;
    }

     /**
     * Get the value of HoraIncidente
     *
     * @return mixed
     */
    public function getHoraIncidente()
    {
        return $this->horaIncidente;
    }

    /**
     * Set the value of HoraIncidente
     *
     * @param mixed horaIncidente
     *
     * @return self
     */
    public function setHoraIncidente($horaIncidente)
    {
        $this->horaIncidente = $horaIncidente;

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
     * Get the value of descripcionSuceso
     *
     * @return mixed
     */
    public function getDescripcionSuceso()
    {
        return $this->descripcionSuceso;
    }

    /**
     * Set the value of descripcionSuceso
     *
     * @param mixed descripcionSuceso
     *
     * @return self
     */
    public function setDescripcionSuceso($descripcionSuceso)
    {
        $this->descripcionSuceso = $descripcionSuceso;

        return $this;
    }

     /**
     * Get the value of tipoRobo
     *
     * @return mixed
     */
    public function getTipoRobo()
    {
        return $this->tipoRobo;
    }

    /**
     * Set the value of tipoRobo
     *
     * @param mixed tipoRobo
     *
     * @return self
     */
    public function setTipoRobo($tipoRobo)
    {
        $this->tipoRobo = $tipoRobo;

        return $this;
    }

    /**
     * Get the value of estatura
     *
     * @return mixed
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Set the value of estatura
     *
     * @param mixed estatura
     *
     * @return self
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;

        return $this;
    }
    /**
    * Get the value of apariencia
    *
    * @return mixed
    */
   public function getApariencia()
   {
       return $this->apariencia;
   }

   /**
    * Set the value of apariencia
    *
    * @param mixed apariencia
    *
    * @return self
    */
   public function setApariencia($apariencia)
   {
       $this->apariencia = $apariencia;

       return $this;
   }

    /**
    * Get the value of tez
    *
    * @return mixed
    */
   public function getTez()
   {
       return $this->tez;
   }

   /**
    * Set the value of tez
    *
    * @param mixed tez
    *
    * @return self
    */
   public function setTez($tez)
   {
       $this->tez = $tez;

       return $this;
   }

   /**
    * Get the value of cabello
    *
    * @return mixed
    */
    public function getCabello()
    {
        return $this->cabello;
    }
 
    /**
     * Set the value of cabello
     *
     * @param mixed cabello
     *
     * @return self
     */
    public function setCabello($cabello)
    {
        $this->cabello = $cabello;
 
        return $this;
    }

     /**
    * Get the value of ojos
    *
    * @return mixed
    */
    public function getOjos()
    {
        return $this->ojos;
    }
 
    /**
     * Set the value of ojos
     *
     * @param mixed ojos
     *
     * @return self
     */
    public function setOjos($ojos)
    {
        $this->ojos = $ojos;
 
        return $this;
    }

    /**
    * Get the value of cara
    *
    * @return mixed
    */
    public function getCara()
    {
        return $this->cara;
    }
 
    /**
     * Set the value of cara
     *
     * @param mixed cara
     *
     * @return self
     */
    public function setCara($cara)
    {
        $this->cara = $cara;
 
        return $this;
    }

    /**
    * Get the value of boca
    *
    * @return mixed
    */
    public function getBoca()
    {
        return $this->boca;
    }
 
    /**
     * Set the value of boca
     *
     * @param mixed boca
     *
     * @return self
     */
    public function setBoca($boca)
    {
        $this->boca = $boca;
 
        return $this;
    }

    /**
    * Get the value of tipoRopa
    *
    * @return mixed
    */
    public function getTipoRopa()
    {
        return $this->tipoRopa;
    }
 
    /**
     * Set the value of tipoRopa
     *
     * @param mixed tipoRopa
     *
     * @return self
     */
    public function setTipoRopa($tipoRopa)
    {
        $this->tipoRopa = $tipoRopa;
 
        return $this;
    }

    /**
    * Get the value of objetoRostro
    *
    * @return mixed
    */
    public function getObjetoRostro()
    {
        return $this->objetoRostro;
    }
 
    /**
     * Set the value of objetoRostro
     *
     * @param mixed objetoRostro
     *
     * @return self
     */
    public function setObjetoRostro($objetoRostro)
    {
        $this->objetoRostro = $objetoRostro;
 
        return $this;
    }

    /**
    * Get the value of edadAprox
    *
    * @return mixed
    */
    public function getEdadAprox()
    {
        return $this->edadAprox;
    }
 
    /**
     * Set the value of edadAprox
     *
     * @param mixed edadAprox
     *
     * @return self
     */
    public function setEdadAprox($edadAprox)
    {
        $this->edadAprox = $edadAprox;
 
        return $this;
    }

    /**
    * Get the value of cicatriz
    *
    * @return mixed
    */
    public function getCicatriz()
    {
        return $this->cicatriz;
    }
 
    /**
     * Set the value of cicatriz
     *
     * @param mixed cicatriz
     *
     * @return self
     */
    public function setCicatriz($cicatriz)
    {
        $this->cicatriz = $cicatriz;
 
        return $this;
    }

    /**
    * Get the value of tatuaje
    *
    * @return mixed
    */
    public function getTatuaje()
    {
        return $this->tatuaje;
    }
 
    /**
     * Set the value of tatuaje
     *
     * @param mixed tatuaje
     *
     * @return self
     */
    public function setTatuaje($tatuaje)
    {
        $this->tatuaje = $tatuaje;
 
        return $this;
    }

    /**
    * Get the value of piercing
    *
    * @return mixed
    */
    public function getPiercing()
    {
        return $this->piercing;
    }
 
    /**
     * Set the value of piercing
     *
     * @param mixed piercing
     *
     * @return self
     */
    public function setPiercing($piercing)
    {
        $this->piercing = $piercing;
 
        return $this;
    }

    /**
    * Get the value of otro
    *
    * @return mixed
    */
    public function getOtro()
    {
        return $this->otro;
    }
 
    /**
     * Set the value of otro
     *
     * @param mixed otro
     *
     * @return self
     */
    public function setOtro($otro)
    {
        $this->otro = $otro;
 
        return $this;
    }

    /**
    * Get the value of metodoHuida
    *
    * @return mixed
    */
    public function getMetodoHuida()
    {
        return $this->metodoHuida;
    }
 
    /**
     * Set the value of metodoHuida
     *
     * @param mixed metodoHuida
     *
     * @return self
     */
    public function setMetodoHuida($metodoHuida)
    {
        $this->metodoHuida = $metodoHuida;
 
        return $this;
    }

     /**
    * Get the value of observaciones
    *
    * @return mixed
    */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
 
    /**
     * Set the value of observaciones
     *
     * @param mixed observaciones
     *
     * @return self
     */
    public function observaciones($observaciones)
    {
        $this->observaciones = $observaciones;
 
        return $this;
    }
}
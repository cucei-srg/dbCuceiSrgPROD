<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\reporteManten;
/**
 * @ORM\Entity
 * @ORM\Table(name="materialList")
 */
class materialList
{
    /**
     * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $indice;
    /**
    * @ORM\ManyToOne(targetEntity="reporteManten")
    * @ORM\JoinColumn(name="folio", referencedColumnName="folio")
    */
    private $folio;
    /**
    * @ORM\Column(type="datetime", nullable=false)
    * @ORM\Version
    * @var string
    */
    private $fechaSolicitud;
    /**
    * @ORM\Column(type="string", length=60, nullable=false)
    */
    private $reporteProyecto;
    /**
    * @ORM\Column(type="string", length=60, nullable=false)
    */
    private $solicita;
    /**
    * @ORM\Column(type="string", length=60, nullable=false)
    */
    private $material;
    /**
    * @ORM\Column(type="string", length=30, nullable=true)
    */
    private $catalogo;
    /**
    * @ORM\Column(type="string", length=10, nullable=false)
    */
    private $unidad;
    /**
    * @ORM\Column(type="integer", length=10, nullable=false)
    */
    private $cantidadSolicitada;
    /**
    * @ORM\Column(type="integer", length=10, nullable=false)
    */
    private $cantidadRecibida;
    /**
    * @ORM\Column(type="integer", length=10, nullable=false)
    */
    private $pendiente;
    /**
     * @ORM\Column(type="date", nullable=true)
    */
    private $fecha;
    /**
    * @ORM\Column(type="integer", length=5, nullable=true)
    */
    private $diasSurtido;
    /**
    * @ORM\Column(type="string", length=30, nullable=false)
    */
    private $estatus;
    /**
    * @ORM\Column(type="string", length=250, nullable=false)
    */
    private $observaciones;
    

    /**
     * Get the value of indice
     */ 
    public function getIndice()
    {
        return $this->indice;
    }

    /**
     * Set the value of indice
     *
     * @return  self
     */ 
    public function setIndice($indice)
    {
        $this->indice = $indice;

        return $this;
    }

    /**
     * Get the value of folio
     */ 
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set the value of folio
     *
     * @return  self
     */ 
    public function setFolio($folio)
    {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get the value of fechaSolicitud
     *
     * @return  string
     */ 
    public function getFechaSolicitud()
    {
        return $this->fechaSolicitud;
    }

    /**
     * Set the value of fechaSolicitud
     *
     * @param  string  $fechaSolicitud
     *
     * @return  self
     */ 
    public function setFechaSolicitud(string $fechaSolicitud)
    {
        $this->fechaSolicitud = $fechaSolicitud;

        return $this;
    }

    /**
     * Get the value of reporteProyecto
     */ 
    public function getReporteProyecto()
    {
        return $this->reporteProyecto;
    }

    /**
     * Set the value of reporteProyecto
     *
     * @return  self
     */ 
    public function setReporteProyecto($reporteProyecto)
    {
        $this->reporteProyecto = $reporteProyecto;

        return $this;
    }

    /**
     * Get the value of solicita
     */ 
    public function getSolicita()
    {
        return $this->solicita;
    }

    /**
     * Set the value of solicita
     *
     * @return  self
     */ 
    public function setSolicita($solicita)
    {
        $this->solicita = $solicita;

        return $this;
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material
     *
     * @return  self
     */ 
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get the value of catalogo
     */ 
    public function getCatalogo()
    {
        return $this->catalogo;
    }

    /**
     * Set the value of catalogo
     *
     * @return  self
     */ 
    public function setCatalogo($catalogo)
    {
        $this->catalogo = $catalogo;

        return $this;
    }

    /**
     * Get the value of unidad
     */ 
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set the value of unidad
     *
     * @return  self
     */ 
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get the value of cantidadSolicitada
     */ 
    public function getCantidadSolicitada()
    {
        return $this->cantidadSolicitada;
    }

    /**
     * Set the value of cantidadSolicitada
     *
     * @return  self
     */ 
    public function setCantidadSolicitada($cantidadSolicitada)
    {
        $this->cantidadSolicitada = $cantidadSolicitada;

        return $this;
    }

    /**
     * Get the value of cantidadRecibida
     */ 
    public function getCantidadRecibida()
    {
        return $this->cantidadRecibida;
    }

    /**
     * Set the value of cantidadRecibida
     *
     * @return  self
     */ 
    public function setCantidadRecibida($cantidadRecibida)
    {
        $this->cantidadRecibida = $cantidadRecibida;

        return $this;
    }

    /**
     * Get the value of pendiente
     */ 
    public function getPendiente()
    {
        return $this->pendiente;
    }

    /**
     * Set the value of pendiente
     *
     * @return  self
     */ 
    public function setPendiente($pendiente)
    {
        $this->pendiente = $pendiente;

        return $this;
    }

    /**
     * Get the value of fecha
     */ 
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of fecha
     *
     * @return  self
     */ 
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of diasSurtido
     */ 
    public function getDiasSurtido()
    {
        return $this->diasSurtido;
    }

    /**
     * Set the value of diasSurtido
     *
     * @return  self
     */ 
    public function setDiasSurtido($diasSurtido)
    {
        $this->diasSurtido = $diasSurtido;

        return $this;
    }

    /**
     * Get the value of estatus
     */ 
    public function getEstatus()
    {
        return $this->estatus;
    }

    /**
     * Set the value of estatus
     *
     * @return  self
     */ 
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get the value of observaciones
     */ 
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set the value of observaciones
     *
     * @return  self
     */ 
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }
}
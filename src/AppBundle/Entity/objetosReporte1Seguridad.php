<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\reporte1Seguridad;
/**
 * @ORM\Entity
 * @ORM\Table(name="objetosReporte1Seguridad")
 */
class objetosReporte1Seguridad
{
/**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
    /**
    * @ORM\ManyToOne(targetEntity="reporte1Seguridad")
    * @ORM\JoinColumn(name="folioReporte", referencedColumnName="id")
    */
    private $folioReporte;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $modelo;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $marca;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $tipo;
/**
  * @ORM\Column(type="date", length=30, nullable=true)
  */
  private $year;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $color;
/**
  * @ORM\Column(type="string", length=30, nullable=true)
  */
  private $rodado;

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
     * Get the value of folioReporte
     *
     * @return mixed
     */
    public function getFolioReporte()
    {
        return $this->folioReporte;
    }

    /**
     * Set the value of folioReporte
     *
     * @param mixed folioReporte
     *
     * @return self
     */
    public function setFolioReporte($folioReporte)
    {
        $this->folioReporte = $folioReporte;

        return $this;
    }

    /**
     * Get the value of modelo
     *
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @param mixed modelo
     *
     * @return self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of marca
     *
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @param mixed marca
     *
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of tipo
     *
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @param mixed tipo
     *
     * @return self
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

     /**
     * Get the value of year
     *
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @param mixed year
     *
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

     /**
     * Get the value of color
     *
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param mixed color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of rodado
     *
     * @return mixed
     */
    public function getRodado()
    {
        return $this->rodado;
    }

    /**
     * Set the value of rodado
     *
     * @param mixed rodado
     *
     * @return self
     */
    public function setRodado($rodado)
    {
        $this->rodado = $rodado;

        return $this;
    }
}
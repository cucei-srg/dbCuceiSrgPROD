<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\reporteManten;
use AppBundle\Entity\encargadoList;
/**
 * @ORM\Entity
 * @ORM\Table(name="encargado")
 */
class encargado
{
/**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  private $id;
   /**
    * @ORM\ManyToOne(targetEntity="reporteManten")
    * @ORM\JoinColumn(name="folioReporte", referencedColumnName="folio")
    */
    private $folioReporte;
    /**
    * @ORM\ManyToOne(targetEntity="encargadoList")
    * @ORM\JoinColumn(name="idPersonal", referencedColumnName="id")
    */
    private $idPersonal;

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
     * Get the value of idPersonal
     *
     * @return mixed
     */
    public function getIdPersonal()
    {
        return $this->idPersonal;
    }

    /**
     * Set the value of idPersonal
     *
     * @param mixed idPersonal
     *
     * @return self
     */
    public function setIdPersonal($idPersonal)
    {
        $this->idPersonal = $idPersonal;

        return $this;
    }
}
<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="encargadoList")
 */
class encargadoList
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
  * @ORM\Column(type="string", length=30, nullable=false)
  */
  private $aMaterno;
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

}

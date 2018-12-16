<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\usuario;
use AppBundle\Entity\status;
/**
 * @ORM\Entity
 * @ORM\Table(name="statusReporte")
 */
class statusReporte
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
    * @ORM\ManyToOne(targetEntity="status")
    * @ORM\JoinColumn(name="idStatus", referencedColumnName="id")
    */
    private $idStatus;


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
     * Get the value of idUsuario
     *
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
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
     * Get the value of idStatus
     *
     * @return mixed
     */
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    /**
     * Set the value of idStatus
     *
     * @param mixed idStatus
     *
     * @return self
     */
    public function setIdStatus($idStatus)
    {
        $this->idStatus = $idStatus;

        return $this;
    }
}
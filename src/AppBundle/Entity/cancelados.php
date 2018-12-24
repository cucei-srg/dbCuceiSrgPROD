<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\reporteManten;
/**
 * @ORM\Entity
 * @ORM\Table(name="cancelados")
 */
class cancelados
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	/**
	* @ORM\OneToOne(targetEntity="reporteManten")
	* @ORM\JoinColumn(name="folioCancelado", referencedColumnName="folio")
	*/
	private $folioCancelado;

	/**
     * Get the value of folioCancelado
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
     * Get the value of folioCancelado
     *
     * @return mixed
     */
    public function getFolioCancelado()
    {
        return $this->folioCancelado;
    }

    /**
     * Set the value of folioCancelado
     *
     * @param mixed folioCancelado
     *
     * @return self
     */
    public function setFolioCancelado($folioCancelado)
    {
        $this->folioCancelado = $folioCancelado;

        return $this;
    }
}
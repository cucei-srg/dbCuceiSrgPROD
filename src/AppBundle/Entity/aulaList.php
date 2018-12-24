<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="aulaList")
*/
class aulaList
{
  /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    /**
    * @ORM\ManyToOne(targetEntity="moduleList")
    * @ORM\JoinColumn(name="module_id", referencedColumnName="id")
    */
    private $module;
    /**
    * @ORM\ManyToOne(targetEntity="floorList")
    * @ORM\JoinColumn(name="floor_id", referencedColumnName="id")
    */
    private $floor;
    /**
    * @ORM\Column(type="string")
    */
    private $aulaName;

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
     * Get the value of Module
     *
     * @return mixed
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set the value of Module
     *
     * @param mixed module
     *
     * @return self
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }


    /**
     * Get the value of Aula Name
     *
     * @return mixed
     */
    public function getAulaName()
    {
        return $this->aulaName;
    }

    /**
     * Set the value of Aula Name
     *
     * @param mixed aulaName
     *
     * @return self
     */
    public function setAulaName($aulaName)
    {
        $this->aulaName = $aulaName;

        return $this;
    }

}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoveOutRoomObject
 *
 * @ORM\Table(name="move_out_room_object")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MoveOutRoomObjectRepository")
 */
class MoveOutRoomObject
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MoveOutRoom", inversedBy="moveOutRoomObjects")
     */
    private $moveOutRoom;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Object", inversedBy="moveOutRoomObjects")
     */
    private $object;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set moveOutRoom
     *
     * @param \AppBundle\Entity\MoveOutRoom $moveOutRoom
     *
     * @return MoveOutRoomObject
     */
    public function setMoveOutRoom(\AppBundle\Entity\MoveOutRoom $moveOutRoom = null)
    {
        $this->moveOutRoom = $moveOutRoom;

        return $this;
    }

    /**
     * Get moveOutRoom
     *
     * @return \AppBundle\Entity\MoveOutRoom
     */
    public function getMoveOutRoom()
    {
        return $this->moveOutRoom;
    }


    /**
     * Set object
     *
     * @param \AppBundle\Entity\Object $object
     *
     * @return MoveOutRoomObject
     */
    public function setObject(\AppBundle\Entity\Object $object = null)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * Get object
     *
     * @return \AppBundle\Entity\Object
     */
    public function getObject()
    {
        return $this->object;
    }
}

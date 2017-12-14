<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

/**
 * MoveOut
 *
 * @ORM\Table(name="move_out")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MoveOutRepository")
 */
class MoveOut
{
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Room", mappedBy="moveOut")
     */
    private $rooms;

    // PERSONNAL RELATIONS

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $email;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rooms
     *
     * @param string $rooms
     *
     * @return MoveOut
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Get rooms
     *
     * @return string
     */
    public function getRooms()
    {
        return $this->rooms;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rooms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return MoveOut
     */
    public function addRoom(\AppBundle\Entity\Room $room)
    {
        $this->rooms[] = $room;

        return $this;
    }

    /**
     * Remove room
     *
     * @param \AppBundle\Entity\Room $room
     */
    public function removeRoom(\AppBundle\Entity\Room $room)
    {
        $this->rooms->removeElement($room);
    }


    /**
     * Set email
     *
     * @param string $email
     *
     * @return MoveOut
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}

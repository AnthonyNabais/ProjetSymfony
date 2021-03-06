<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Machines
 *
 * @ORM\Table(name="machines")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MachinesRepository")
 */
class Machines
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=15)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255)
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creationdate", type="datetime")
     */
    private $creationdate;

    /**
     * @var int
     *
     * @ORM\Column(name="room", type="integer")
     */
    private $room;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @var int
     *
     * @ORM\Column(name="ping", type="integer")
     */
    private $ping;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pingdate", type="datetime")
     */
    private $pingdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="statedate", type="datetime")
     */
    private $statedate;



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
     * Set name
     *
     * @param string $name
     *
     * @return Machines
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Machines
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Machines
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set creationdate
     *
     * @param \DateTime $creationdate
     *
     * @return Machines
     */
    public function setCreationdate($creationdate)
    {
        $this->creationdate = $creationdate;

        return $this;
    }

    /**
     * Get creationdate
     *
     * @return \DateTime
     */
    public function getCreationdate()
    {
        return $this->creationdate;
    }

    /**
     * Set room
     *
     * @param integer $room
     *
     * @return Machines
     */
    public function setRoom($room)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return int
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return Machines
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }
    
    /**
     * Set ping
     *
     * @param integer $ping
     *
     * @return Machines
     */
    public function setPing($ping)
    {
        $this->ping = $ping;

        return $this;
    }

    /**
     * Get ping
     *
     * @return int
     */
    public function getPing()
    {
        return $this->ping;
    }

    /**
     * Set pingdate
     *
     * @param \DateTime $pingdate
     *
     * @return Machines
     */
    public function setPingdate($pingdate)
    {
        $this->pingdate = $pingdate;

        return $this;
    }

    /**
     * Get pingdate
     *
     * @return \DateTime
     */
    public function getPingdate()
    {
        return $this->pingdate;
    }

    /**
     * Set statedate
     *
     * @param \DateTime $statedate
     *
     * @return Machines
     */
    public function setStatedate($statedate)
    {
        $this->statedate = $statedate;

        return $this;
    }

    /**
     * Get statedate
     *
     * @return \DateTime
     */
    public function getStatedate()
    {
        return $this->statedate;
    }


}


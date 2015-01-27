<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

class Blob
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Type("integer")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     * @JMS\Type("DateTime")
     */
    protected $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", nullable=false)
     * @JMS\Type("string")
     */
    protected $name;

    public function __construct($name)
    {
        $this->setCreatedAt(new \DateTime());
        $this->setName($name);
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime
     * @return Blob
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string
     * @return Blob
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
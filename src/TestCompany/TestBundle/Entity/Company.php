<?php

namespace TestCompany\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Company
 */
class Company
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $ownerName;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $created;


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
     * Set companyName
     *
     * @param string $companyName
     * @return Company
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Company
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set ownerName
     *
     * @param string $ownerName
     * @return Company
     */
    public function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
    
        return $this;
    }

    /**
     * Get ownerName
     *
     * @return string 
     */
    public function getOwnerName()
    {
        return $this->ownerName;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Company
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Company
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }
}
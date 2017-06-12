<?php

/**
 * Created by PhpStorm.
 * User: Assanali
 * Date: 6/9/17
 * Time: 18:56
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ProductData");
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRep")
 */

class ProductData
{

    /**
     * @var int
     *
     * @ORM\Column(name = "id", type = "integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $intProductDataId;

    /**
     * @return mixed
     */
    public function getIntProductDataId()
    {
        return $this->intProductDataId;
    }

    /**
     * @param mixed $intProductDataId
     */
    public function setIntProductDataId($intProductDataId)
    {
        $this->intProductDataId = $intProductDataId;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="ProductName", type="string", length=255)
     */

    private $strProductName;
    /**
     * @var string
     *
     * @ORM\Column(name="ProductDesc", type="string", length=255)
     */
    protected $strProductDesc;
    /**
     * @var string
     *
     * @ORM\Column(name="ProductCode", type="string", length=255)
     */
    protected $strProductCode;

    /**
     * @return mixed
     */
    public function getStrProductName()
    {
        return $this->strProductName;
    }

    /**
     * @param string $strProductName
     * @return ProductData
     */
    public function setStrProductName($strProductName)
    {
        if (!empty($this->strProductName)) {
            $this->strProductNphame = $strProductName;
        }
    }

    /**
     * @return mixed
     */
    public function getStrProductDesc()
    {
        return $this->strProductDesc;
    }

    /**
     * @param string $strProductDesc
     * @return ProductData
     */
    public function setStrProductDesc($strProductDesc)
    {
        $this->strProductDesc = $strProductDesc;
    }

    /**
     * @return mixed
     */
    public function getStrProductCode()
    {
        return $this->strProductCode;
    }

    /**
     * Set strProductCode
     * @param string $strProductCode
     * @return ProductData
     */
    public function setStrProductCode($strProductCode)
    {
        $this->strProductCode = $strProductCode;
    }
}
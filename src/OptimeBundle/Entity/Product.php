<?php

namespace OptimeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="OptimeBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\Column(name="code", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es requerido")
     * @Assert\Length(
     *      min = 4,
     *      max = 10,
     *      minMessage = "El código debe contener al menos {{ limit }} caracteres de longitud",
     *      maxMessage = "El código puede contener como máximo {{ limit }} caracteres de longitud"
     * )
     * @Assert\Regex(
     *     pattern="(^[a-zA-Z0-9]*$)",
     *     match=true,
     *     message="El código no puede contener caracteres especiales ni espacios"
     * )
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es requerido")
     * @Assert\Length(
     *      min = 4,
     *      minMessage = "El nombre debe contener al menos {{ limit }} caracteres de longitud",
     * )
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es requerido")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     * @Assert\NotBlank(message="Este campo es requerido")
     */
    private $brand;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     * @Assert\NotBlank(message="Este campo es requerido")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * @Assert\NotBlank(message="Este campo es requerido")
     */
    private $category;


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
     * Set code
     *
     * @param string $code
     *
     * @return Product
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set price
     *
     * @param float $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set category
     *
     * @param \OptimeBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\OptimeBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \OptimeBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @Assert\IsTrue(message="El nombre y el código no pueden repetirse")
     */
    public function isCodeLegal()
    {
        return $this->code !== $this->name;
    }
}

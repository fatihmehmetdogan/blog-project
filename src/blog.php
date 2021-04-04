<?php
// src/Product.php



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="blog")
 */
class blog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="integer")
     */
    private $blog_id;
    /**
     * @ORM\Column(type="string")
     */
    private $blog_title;
    /**
     * @ORM\Column(type="text"
     */
    private $blog_content;
    /**
     * @ORM\Column(type="string)
     */
    private $blog_image;
    /**
     *@ORM\Column(type="int")
     */
    private $blog_order;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

}
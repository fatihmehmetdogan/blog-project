<?php
// src/Product.php


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $category_title;
    /**
     * @ORM\Column(type="integer")
     */
    private $category_order;
    /**
     * @ORM\Column(type="string")
     */
    private $category_image;
    /**
     * @ORM\ManyToMany(targetEntity="blog", mappedBy="categories")
     * @var Collection
     */
    private $blogs;

    public function __construct()
    {
        $this->blogs = new ArrayCollection();
    }



    /**
     * @param ArrayCollection $blogs
     */
    public function setBlogs(ArrayCollection $blogs): void
    {
        $this->blogs = $blogs;
    }

    /**
     * @return Collection|blog[]
     */
    public function getBlogs(): Collection
    {
        return $this->blogs;
    }


    public function addblog(blog $blog): self
    {
        if(!$this->blogs->contains($blog)){
            $this->blogs[]= $blog;
            $blog->addcategories($this);
        }
        return $this;
    }


    public function removeblog(blog $blog): self
    {
        if(!$this->blogs->contains($blog)){
            $this->blogs->removeElement($blog);
            $blog->removecategory($this);
        }
        return $this;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getCategoryTitle()
    {
        return $this->category_title;
    }

    /**
     * @return mixed
     */
    public function getCategoryOrder()
    {
        return $this->category_order;
    }

    /**
     * @return mixed
     */
    public function getCategoryImage()
    {
        return $this->category_image;
    }


    /**
     * @param mixed $category_title
     */
    public function setCategoryTitle($category_title): void
    {
        $this->category_title = $category_title;
    }

    /**
     * @param mixed $category_order
     */
    public function setCategoryOrder($category_order): void
    {
        $this->category_order = $category_order;
    }

    /**
     * @param mixed $category_image
     */
    public function setCategoryImage($category_image): void
    {
        $this->category_image = $category_image;
    }

}
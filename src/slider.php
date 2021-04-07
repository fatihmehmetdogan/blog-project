<?php
// src/Product.php



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="slider")
 */
class slider
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
    private $slider_title;
    /**
     * @ORM\Column(type="text")
     */
    private $slider_content;
    /**
     * @ORM\Column(type="string")
     */
    private $slider_image;

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
    public function getSliderTitle()
    {
        return $this->slider_title;
    }

    /**
     * @return mixed
     */
    public function getSliderContent()
    {
        return $this->slider_content;
    }

    /**
     * @return mixed
     */
    public function getSliderImage()
    {
        return $this->slider_image;
    }


    /**
     * @param mixed $slider_title
     */
    public function setSliderTitle($slider_title): string
    {
        $this->slider_title = $slider_title;
    }

    /**
     * @param mixed $slider_content
     */
    public function setSliderContent($slider_content): string
    {
        $this->slider_content = $slider_content;
    }

    /**
     * @param mixed $slider_image
     */
    public function setSliderImage($slider_image): string
    {
        $this->slider_image = $slider_image;
    }


}
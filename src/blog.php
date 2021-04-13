<?php



use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="string")
     */
    private $blog_title;
    /**
     * @ORM\Column(type="text")
     */
    private $blog_content;
    /**
     * @ORM\Column(type="string")
     */
    private $blog_image;
    /**
     *@ORM\Column(type="integer")
     */
    private $blog_order;
    /**
     * @ORM\ManyToMany(targetEntity="category", inversedBy="blogs")
     */
    private $categorys;

    public function __construct()
    {
        $this->categorys = new ArrayCollection();

    }

    /**
     * @return Collection|category[]
     */
    public function getCategorys(): Collection
    {
        return $this->categorys;
    }

    public function addcategory(category $category): self
    {
        if(!$this->categorys->contains($category)){
            $this->categorys[]= $category;
            $category->addblog[$this];
        }
        return $this;
    }

    public function removecategory(category $category): self
    {
        if(!$this->categorys->contains($category)){
            $this->categorys->removeElement($category);
            $category->removeblog($this);
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
    public function getBlogTitle()
    {
        return $this->blog_title;
    }

    /**
     * @param mixed $blog_title
     */
    public function setBlogTitle($blog_title): void
    {
        $this->blog_title = $blog_title;
    }

    /**
     * @return mixed
     */
    public function getBlogContent()
    {
        return $this->blog_content;
    }

    /**
     * @param mixed $blog_content
     */
    public function setBlogContent($blog_content): void
    {
        $this->blog_content = $blog_content;
    }

    /**
     * @return mixed
     */
    public function getBlogImage()
    {
        return $this->blog_image;
    }

    /**
     * @param mixed $blog_image
     */
    public function setBlogImage($blog_image): void
    {
        $this->blog_image = $blog_image;
    }

    /**
     * @return mixed
     */
    public function getBlogOrder()
    {
        return $this->blog_order;
    }

    /**
     * @param mixed $blog_order
     */
    public function setBlogOrder($blog_order): void
    {
        $this->blog_order = $blog_order;
    }

}
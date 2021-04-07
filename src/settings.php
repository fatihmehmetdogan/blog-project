<?php
// src/Product.php



use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="settings")
 */
class settings
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
    private $setting_title;
    /**
     * @ORM\Column(type="text")
     */
    private $setting_content;
    /**
     * @ORM\Column(type="string")
     */
    private $setting_address;
    /**
     *@ORM\Column(type="string")
     */
    private $setting_phone;
    /**
     *@ORM\Column(type="string")
     */
    private $setting_email;

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
    public function getSettingTitle()
    {
        return $this->setting_title;
    }

    /**
     * @return mixed
     */
    public function getSettingContent()
    {
        return $this->setting_content;
    }

    /**
     * @return mixed
     */
    public function getSettingAddress()
    {
        return $this->setting_address;
    }

    /**
     * @return mixed
     */
    public function getSettingEmail()
    {
        return $this->setting_email;
    }

    /**
     * @return mixed
     */
    public function getSettingPhone()
    {
        return $this->setting_phone;
    }


    /**
     * @param mixed $setting_title
     */
    public function setSettingTitle($setting_title): string
    {
        $this->setting_title = $setting_title;
    }

    /**
     * @param mixed $setting_content
     */
    public function setSettingContent($setting_content): string
    {
        $this->setting_content = $setting_content;
    }

    /**
     * @param mixed $setting_address
     */
    public function setsettingAddress($bsetting_address): string
    {
        $this->bsetting_address = $bsetting_address;
    }

    /**
     * @param mixed $setting_email
     */
    public function setSettingEmail($setting_email): string
    {
        $this->setting_email = $setting_email;
    }

    /**
     * @param mixed $setting_phone
     */
    public function setSettingPhone($setting_phone): string
    {
        $this->setting_phone = $setting_phone;
    }

}
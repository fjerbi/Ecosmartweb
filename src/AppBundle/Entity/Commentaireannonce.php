<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaireannonce
 *
 * @ORM\Table(name="commentaireannonce")
 * @ORM\Entity(repositoryClass="AnnonceBundle\Repository\CommentaireannonceRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Commentaireannonce
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text", unique=false)
     */
    private $contenu;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Annonce", inversedBy="commentaires",cascade={"remove"})
     * @ORM\JoinColumn(name="annonce_id", referencedColumnName="id")
     */
    private $annonce;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="commentaires")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="posted_at", type="datetime")
     */
    private $posted_at;


    /**
     * @ORM\PrePersist
     */

    public function setPostedAt(){
        $this->posted_at = new \DateTime('now');
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }

    /**
     * @param mixed $annonce
     */
    public function setAnnonce($annonce)
    {
        $this->annonce = $annonce;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime
     */
    public function getPostedAt()
    {
        return $this->posted_at;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}
